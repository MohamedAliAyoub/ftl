<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\SubCategory;
use App\Category;
use App\Product;

class MainController extends Controller
{
	//return main page route /
    public function index(){
    	return view('frontend.index');
    }

    //return main page route /
    public function contact(){
        return view('frontend.contact');
    }

     public function tracking(){
        return view('frontend.tracking');
    }

     public function tracking_map(){
        return view('frontend.tracking_map');
    }


    
    public function tutorials(){
        return view('frontend.tutorials');
    }

    public function booking(){
        return view('frontend.booking');
    }
     public function booking_result(){
        return view('frontend.booking_result');
    }

    public function about(){
        return view('frontend.about');
    }

      public function lcl(){
        return view('frontend.lcl');
    }

       public function fcl(){
        return view('frontend.fcl');
    }

       public function bulk(){
        return view('frontend.bulk');
    }

    public function indexMarket(){
    	$categories = SubCategory::get();
    	$products = Product::with('category')->get();
    	return view('frontend.market_place',compact('categories','products'));

    }


    public function indexCategory(Request $request){
    	$categories = Category::when($request->search, function ($q) use ($request) {

            return $q->where('name', 'Like','%' . $request->search . '%');

        })->latest()->paginate(6);

        return view('frontend.categories', compact('categories'));
    }

       public function indexSubCategory(Request $request,$id){
    	$categories = SubCategory::Where('category_id',$id)->when($request->search, function ($q) use ($request) {

            return $q->where('name', 'Like','%' . $request->search . '%');

        })->latest()->paginate(6);
        
        return view('frontend.subcategories', compact('categories'));
    }

}
