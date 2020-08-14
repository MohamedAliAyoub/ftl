<?php

namespace App\Http\Controllers\Dashboard\Client;

use App\Category;
use App\SubCategory;
use App\Client;
use App\Order;
use App\Product;
use function foo\func;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function create(Client $client)
    {
        $categories = SubCategory::with('products')->get();
        $orders = $client->orders()->with('products')->paginate(5);
        return view('dashboard.clients.orders.create', compact( 'client', 'categories', 'orders'));

    }//end of create

    public function store(Request $request, Client $client)
    { 

        //dd($request->all());
        $request->validate([
            'products' => 'required|array',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|numeric',
        ]);

        $this->attach_order($request, $client);

        // dd($request , $client );
            session()->forget('cart');
        

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('orders.index');

    }//end of store

    public function edit(Client $client, Order $order)
    {
        $categories = SubCategory::with('products')->get();
        $orders = $client->orders()->with('products')->paginate(5);

        return view('dashboard.clients.orders.edit', compact('client', 'order', 'categories', 'orders'));

    }//end of edit

    public function update(Request $request, Client $client, Order $order)
    {
        $request->validate([
            'products' => 'required|array',
        ]);

        $this->detach_order($order);

        $this->attach_order($request, $client);

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('orders.index');

    }//end of update

    private function attach_order($request, $client)
    {
        $total_price = 0;
        foreach ($request->products as $item) {
            $product = Product::FindOrFail($item['product_id']);
            $total_price += $product->price * $item['quantity'];
            $product->update([
                'stock' => $product->stock - $item['quantity']
            ]);

        }//end of foreach

        $order = $client->orders()->create(['total_price' => $total_price]);
        $order->items()->saveMany(collect($request->products)->map(function($item){
            return new \App\ProductOrder($item);
        })->values());

        return $order;
    }//end of attach order

    private function detach_order($order)
    {
        foreach ($order->products as $product) {

            $product->update([
                'stock' => $product->stock + $product->pivot->quantity
            ]);

        }//end of for each

        $order->delete();

    }//end of detach order

    public function MyOrders(){
        $orders = Order::where('client_id',auth()->guard('client_web')->user()->id)->with('client')->get();
        return view('frontend.cart.myOrders',compact('orders'));
    }

}//end of controller
