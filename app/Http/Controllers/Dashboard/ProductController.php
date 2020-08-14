<?php

namespace App\Http\Controllers\Dashboard;

use App\SubCategory;
use App\Product;
use App\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = SubCategory::all();

        $products = Product::with('category')->when($request->search, function ($q) use ($request) {

            return $q->where('name','Like', '%' . $request->search . '%');

        })->when($request->category_id, function ($q) use ($request) {

            return $q->where('category_id', $request->category_id);

        })->latest()->paginate(5);
        


        return view('dashboard.products.index', compact('categories', 'products'));

    }//end of index


    public function addToCart(Product $product) {
        
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $cart->add($product);
        // dd($cart);
        session()->put('cart', $cart);
        return redirect()->route('products.index')->with('success', 'Product was added in card');
    }//end of add to cart

      public function showCart() {
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }
        // dd($cart);

        // dd($cart);
        return view('frontend.cart.show', compact('cart'));
    }
    public function checkout($amount) {
    
            return view('cart.checkout',compact('amount'));
    }
    public function charge(Request $request) {
        //dd($request->stripeToken);
       

        $stripe = new  Stripe('sk_test_FaVDTTyUSAopQvLKYsltgRol00XxDeGKym', '2019-12-03');
        $charge =  $stripe->charges()->create([
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'amount'   => $request->amount,
            'description' => ' Test from laravel new app'
        ]);
        $chargeId = $charge['id'];
        if ($chargeId) {
            

              // save order in orders table ...
            
            auth()->user()->orders()->create([
                'cart' => serialize( session()->get('cart'))
            ]);
            // clearn cart 
            session()->forget('cart');  
            return redirect()->route('store')->with('success', " Payment was done. Thanks");
        } else {
            return redirect()->back();
        }
    }
    


      public function GetSubCategoryProduct(Request $request, $productsOfSub){

        $categories = SubCategory::all();

        
        
        $products = Product::where('sub_category_id',$productsOfSub)->with('category')->when($request->search, function ($q) use ($request) {

            return $q->where('name','Like', '%' . $request->search . '%');

        })->when($request->category_id, function ($q) use ($request) {

            return $q->where('category_id', $request->category_id);

        })->latest()->paginate(5);
        return view('dashboard.products.index', compact('products','categories'));


    }

    public function create()
    {
        $categories = SubCategory::all();
        return view('dashboard.products.create', compact('categories'));

    }//end of create

    public function store(Request $request)
    {

         $request->validate([
            'name' => 'required',
            'sub_category_id' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        


        $request_data = $request->all();

     $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
    $request_data['image']=$new_name;
           
        
    

        Product::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('products.index');

    }//end of store

    public function edit(Product $product)
    {
        $categories = SubCategory::all();
        return view('dashboard.products.edit', compact('categories', 'product'));

    }//end of edit

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'sub_category_id' => 'required|integer',
            'image' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        $request_data = $request->all();

       
      

     $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
    $request_data['image']=$new_name;
        
        $product->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('products.index');

    }//end of update

    public function destroy(Product $product)
    {
        

        $product->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('products.index');

    }//end of destroy


    public function show (Product $product){
    
        return view('dashboard.products.show', compact('product'));
    }


      public function updateShop(Request $request, Product $product)
    {
        $request->validate([
            'qty' => 'required|numeric|min:1'
        ]);
        $cart = new Cart(session()->get('cart'));
        $cart->updateQty($product->id, $request->qty);
        session()->put('cart', $cart);
        return redirect()->route('cart.show')->with('success', 'Product updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
       public function remove(Product $product)
    {
        $cart = new Cart( session()->get('cart'));
        $cart->remove($product->id);
        if( $cart->totalQty <= 0 ) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }
        
        return redirect()->route('cart.show')->with('success', 'Product was removed');
    }


}//end of controller
