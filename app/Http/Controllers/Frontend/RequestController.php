<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country;
use App\category;
use App\Product;
use App\Port;
use App\FTL_request;
use App\Fcl;

class RequestController extends Controller
{
    public function quote(){
        return view('frontend.request.quote');
    } 
    public function find_quote(){
        return view('frontend.request.find_quote');
    }
    

    public function request(){
        return view('frontend.request.request');
    }


     public function requestLcl(){
        $products   = Product::get();
        $countries  = Country::get();
        $categories = Category::get();
        $ports      = Port::get();
        return view('frontend.request.lcl',compact('countries','ports','categories','products'));
    }
     public function requestFcl(){
        $products   = Product::get();
        $countries  = Country::get();
        $categories = Category::get();
        $ports      = Port::get();
        return view('frontend.request.fcl',compact('countries','ports','categories','products'));
    }
     public function requestBulk(){
        $products   = Product::get();
        $countries  = Country::get();
        $categories = Category::get();
        $ports      = Port::get();
        return view('frontend.request.bulk',compact('countries','ports','categories','products'));
    }
    

    public function request_quote(){
    	$products	= Product::get();
    	$countries 	= Country::get();
    	$categories = Category::get();
    	$ports     	= Port::get();
        return view('frontend.request.request_quote',compact('countries','ports','categories','products'));
    }

    public function store(Request $request){

      	//start imo 
      	if ($request['imo']=='on') {
      		$request['imo']=1;
      	}
      	else  {
      		$request['imo']=0;
      		
      	}
      	//end imo 
		//start of request type
		if ($request['lcl_total_volume'] != null && $request['lcl_untis_lenght'] != null)
		{
    		$request['type'] = 'LCL';
    		$request['lcl_type'] = 'total';
		}
    	elseif ($request['lcl_untis_lenght'] != null || $request['lcl_untis_width'] != null ||$request['lcl_untis_hieght'] != null ||$request['lcl_untis_quantity'] != null )
    	{
    		$request['type'] = 'LCL';
    		$request['lcl_type'] = 'untis';
    	}
      
       

    	elseif($request['bulk_type'] != null || $request['bulk_loading_rate'] != null || $request['bulk_discharge_rate'] != null )
    	{
    		$request['type'] = 'Bulk';
    		$request['lcl_type'] = null;

    	}


    	if($request['container_type'] != null || $request['container_quantity'] != null || $request['cross_weight_fcl'] != null)
		{
    		$request['type'] = 'FCL';
    		$request['lcl_type'] = null;
		}





		// end of request type

		//start validation
        if($request->type =='LCL'&& $request->lcl_type == 'total')
        {

			$request['cross_weight'] = $request['cross_weight_lcl']; 
             $request->validate([
            'country_loading' => 'required|integer|exists:countries,id',
            'country_discharge' => 'required|integer|exists:countries,id',
            'port_loading' => 'nullable|integer|exists:ports,id',
            'port_discharge' => 'nullable|integer|exists:ports,id',

            'request_date' => 'required',
        
            'lcl_total_volume' => 'required|min:1',
            'cross_weight_lcl' => 'required|min:1',
            'file' => 'nullable|mimes:pdf,xlx,csv|max:2048',

        ]);

		

        }   
        elseif($request->type =='LCL'&& $request->lcl_type == 'untis')
        {
            // dd($request->all());
        	
			$request['cross_weight'] = $request['cross_weight_lcl_untis']; 
			$request['lcl_type'] = 'untis'; 

             $request->validate([
            'country_loading' => 'required|integer|exists:countries,id',
            'country_discharge' => 'required|integer|exists:countries,id',
            'port_loading' => 'nullable|integer|exists:ports,id',
            'port_discharge' => 'nullable|integer|exists:ports,id',

            'request_date' => 'required',
            
            'lcl_untis_lenght' => 'required|min:1',
            'lcl_untis_width' => 'required|min:1',
            'lcl_untis_hieght' => 'required|min:1',
            'lcl_untis_quantity' => 'required|min:1',

        ]);
        }   
        elseif($request->type =='FCL')
        {
			$request['cross_weight'] = $request['cross_weight_fcl']; 

             $request->validate([
            'country_loading' => 'required|integer|exists:countries,id',
            'country_discharge' => 'required|integer|exists:countries,id',
            'port_loading' => 'nullable|integer|exists:ports,id',
            'port_discharge' => 'nullable|integer|exists:ports,id',

            'request_date' => 'required',
            
            'container_type' => 'required',
            'container_quantity' => 'required|min:1',
            'cross_weight' => 'required|min:1',



        ]);
        }
         elseif($request->type =='Bulk')
        {
			$request['cross_weight'] = $request['cross_weight_bulk']; 
             $request->validate([
            'country_loading' => 'required|integer|exists:countries,id',
            'country_discharge' => 'required|integer|exists:countries,id',
            'port_loading.*' => 'nullable|integer|exists:ports,id',
            'port_discharge.*' => 'nullable|integer|exists:ports,id',

            'request_date' => 'required',
            
            'bulk_type' => 'required|min:1',
            'bulk_loading_rate' => 'required|min:1',
            'bulk_discharge_rate' => 'required|min:1',
            'cross_weight' => 'required|min:1',
            'file' => 'nullable|mimes:pdf,xlx,csv|max:2048',



        	]);
        }
        //end of validation


        $fTL_request = FTL_request::create($request->all());
        if($request->type =='FCL'){
        	$fcl = Fcl::create([
        		'container_type'=> $request->container_type,
        		'container_quantity'=> $request->container_quantity,
        		'ftl_request_id'=> FTL_request::latest()->first()->id,
        	]);
        }
        if($request->file != null)

        {
         	$fileName = time().'.'.$request->file->extension();  
        	$request->file->move(public_path('uploads/files/'), $fileName);
        }
        return redirect()->route('index');
        

    }

    public function storeLcl(Request $request){
    
        //start imo 
        if ($request['imo']=='on') {
            $request['imo']=1;
        }
        else {
            $request['imo']=0;   
        }
        //end imo 
        //start of request type
         if ($request['lcl_untis_lenght'] != null || $request['lcl_untis_width'] != null ||$request['lcl_untis_hieght'] != null ||$request['lcl_untis_quantity'] != null )
        {
            $request['type'] = 'LCL';
            $request['lcl_type'] = 'untis';
        }
        elseif ($request['cross_weight_lcl'] != null || $request['lcl_total_volume']  )
        {


            $request['type'] = 'LCL';
            $request['lcl_type'] = 'total';
        }
        // end of request type

        //start validation
        if($request->type =='LCL'&& $request->lcl_type == 'total')
        {

            $request['cross_weight'] = $request['cross_weight_lcl']; 

             $request->validate([
            'country_loading' => 'required|integer|exists:countries,id',
            'country_discharge' => 'required|integer|exists:countries,id',
            'port_loading' => 'nullable|integer|exists:ports,id',
            'port_discharge' => 'nullable|integer|exists:ports,id',

            'request_date' => 'required',
        
            'lcl_total_volume' => 'required|min:1',
            'cross_weight_lcl' => 'required|min:1',

        ]);

        

        }   
        elseif($request->type =='LCL'&& $request->lcl_type == 'untis')
        {
            // dd($request->all());
            
            $request['cross_weight'] = $request['cross_weight_lcl_untis']; 
            $request['lcl_type'] = 'untis'; 

             $request->validate([
            'country_loading' => 'required|integer|exists:countries,id',
            'country_discharge' => 'required|integer|exists:countries,id',
            'port_loading' => 'nullable|integer|exists:ports,id',
            'port_discharge' => 'nullable|integer|exists:ports,id',

            'request_date' => 'required',
            
            'lcl_untis_lenght' => 'required|min:1',
            'lcl_untis_width' => 'required|min:1',
            'lcl_untis_hieght' => 'required|min:1',
            'lcl_untis_quantity' => 'required|min:1',

        ]);
        }   
      
         
        //end of validation


        // $fTL_request = FTL_request::create($request->all());
      
        // if($request->file != null)

        // {
        //     $fileName = time().'.'.$request->file->extension();  
        //     $request->file->move(public_path('uploads/files/'), $fileName);
        // }
        $request_date[]=$request->all();
        return redirect()->route('quotes.like.request' , compact('request_date'));
        

    }

    public function storing(Request $request){ 
        // dd(  $request->request_data );
        $data = json_decode($request->request_data);
        // dd($data[0]->toString());
        $data = (array)$data[0];

    
         $fTL_request = FTL_request::create($data);
      
        if($request->file != null)

        {
            $fileName = time().'.'.$request->file->extension();  
            $request->file->move(public_path('uploads/files/'), $fileName);
        }
        return redirect()->route('index')->with(['sucess', 'request stored sucessfulley']);
    }

    public function storeFcl(Request $request){
        // dd($request->all());
        //start imo 

        if ($request['imo']=='on') {
            $request['imo']=1;
        }
        else  {
            $request['imo']=0;    
        }
        //end imo 
        // end of request type
             $request->validate([
            'country_loading' => 'required|integer|exists:countries,id',
            'country_discharge' => 'required|integer|exists:countries,id',
            'port_loading' => 'nullable|integer|exists:ports,id',
            'port_discharge' => 'nullable|integer|exists:ports,id',
            'request_date' => 'required',
        ]);
        //end of validation
        $fTL_request = FTL_request::create($request->only(['country_loading', 'country_discharge', 'port_loading', 'port_discharge', 'imo', 'request_date', 'name', 'email','phone','company_name','note', 'type' ,  'category_id' ,'product_id','client_id'  ]  
            ));

        Fcl::insert(collect($request->input('container_type'))->map(function($v, $k)use($fTL_request, $request){
            return [
                'container_type'=> $v,
                'container_quantity'=> $request->input('container_quantity.'.$k),
                'cross_weight'=> $request->input('cross_weight.'.$k),
                'ftl_request_id'=>$fTL_request->id,
            ];
        })->toArray());
        /*$fcl = Fcl::create([
            'container_type'=> $request->container_type,
            'container_quantity'=> $request->container_quantity,
            'ftl_request_id'=> FTL_request::latest()->first()->id,
        ]);*/
        
        if($request->file != null)
        {
            $fileName = time().'.'.$request->file->extension();  
            $request->file->move(public_path('uploads/files/'), $fileName);
        }
        return redirect()->route('quotes.like.request');
        

    }


       public function storeBulk(Request $request){

        //start imo 
        if ($request['imo']=='on') {
            $request['imo']=1;
        }
        else  {
            $request['imo']=0;
            
        }
        //end imo 
        //start validation
             $request->validate([
            'country_loading' => 'required|integer|exists:countries,id',
            'country_discharge' => 'required|integer|exists:countries,id',
            'port_loading.*' => 'nullable|integer|exists:ports,id',
            'port_discharge.*' => 'nullable|integer|exists:ports,id',
            'request_date' => 'required',
            'bulk_type' => 'required|min:1',
            'bulk_loading_rate' => 'required|min:1',
            'bulk_discharge_rate' => 'required|min:1',
            'cross_weight' => 'required|min:1',
            ]);
        
        //end of validation


        $fTL_request = FTL_request::create($request->all());
       
        if($request->file != null)
        {
            $fileName = time().'.'.$request->file->extension();  
            $request->file->move(public_path('uploads/files/'), $fileName);
        }
        return redirect()->route('index');
    }
}
