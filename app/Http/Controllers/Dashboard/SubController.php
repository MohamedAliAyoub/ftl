<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Sub;
use App\User;
use App\Country;
use App\Company;
use App\Port;
use DB;
use Excel;
use Carbon\Carbon;
use App\FTL_request;
use App\Booking;
use App\Fcl;



class SubController extends Controller
{
    public function index(){

     $subs= Sub::paginate(5);
     return view('dashboard.sub.offers' ,compact('subs'));
    }
     public function offers(){
        $other_quotes = collect([]);
        $quotes = collect([]);
        $my_quotes = Sub::where('sub_id' , auth()->user()->id)->get();
        foreach ($my_quotes as $key) {
            $total = $key->freight_charges  +  $key->origin_charges +  $key->destination_charges;
            $other_quotes->push([
                'key' => $key,
                'items' => Sub::where([
                    ['place_landing' , $key->place_landing],
                    ['place_discharge' , $key->place_discharge],
                    ['port_landing' , $key->port_landing],
                    ['port_discharge' , $key->port_discharge],
                    ['sub_id', '!=',  $key->sub_id],
                ])->where(
                    DB::raw('freight_charges+origin_charges+destination_charges'), 
                    '<', $total
                )->orderBy('freight_charges', 'asc')
                ->orderBy('origin_charges', 'asc')
                ->orderBy('destination_charges', 'asc')
                 ->take(1)->get()/*->collapse()->unique('id')*/
            ]);
        }
        // dd($other_quotes->filter(function($row){
        //     return $row['items']->count() > 0;
        // }));
        return $other_quotes->filter(function($row){
            return $row['items']->count() > 0;
        });
    }


    public function find_quote(Request $request){ 
        
        $request= $request->request_date[0];
        
        $country_loading =Country::where('id' ,$request['country_loading'])->first('title')->toArray();
        $place_discharge =Country::where('id' ,$request['country_discharge'])->first('title')->toArray();
        $port_landing =Port::where('id' ,$request['port_loading'])->first('title')->toArray();
        $port_discharge =Port::where('id' ,$request['port_discharge'])->first('title')->toArray();

      $quotes = Sub::where([
            ['place_landing' , $country_loading],
            ['place_discharge' ,  $place_discharge],
            ['port_landing' ,  $port_landing],
            ['port_discharge' ,  $port_discharge],
            ['type' ,  $request['type']],

        ])->where(function($q)use($request){
             $date = new \Carbon\Carbon($request['request_date']);
            $q->whereDate('date_landing', '>=',date($date->addDays(-5)))
            ->orWhereDate('date_landing', '<=', date($date->addDays(10)));
        })->get();
        // dd($quotes ,$request->id );
        foreach ($quotes as $quote) {
            if($quote->type == 'FCL'){
                $fcl    =Fcl::where('ftl_request_id' , $request->id)->get();
            } 
        }
        // dd($quotes , $country_loading ,$place_discharge ,$port_landing, $port_discharge );
        $request_data =collect([]);
        $request_data->push($request);
        return view('dashboard.sub.find_quote' , compact('quotes','request_data' ));
    }
    public function booking(Request $request){
        
       $request_data[]= json_decode($request->request_data);
       $request_data= (array)$request_data[0][0];
       
       
         
         $sub = Sub::where('id', $request->sub_id)->first();
         // to calculate total price
       
         if(!isset($request_data['cross_weight'] ) ){
            $request_data['cross_weight']=null ;
         }
         if(!isset($request_data['lcl_untis_lenght'] ) ){
            $request_data['lcl_untis_lenght']=null ;
         }
         if(!isset($request_data['lcl_untis_width'] ) ){
            $request_data['lcl_untis_width']=null ;
         }
          if(!isset($request_data['lcl_untis_hieght'] ) ){
            $request_data['lcl_untis_hieght']=null ;
         }
        if($request_data['cross_weight'] !=null && $request_data['lcl_untis_width'] !=null && $request_data['lcl_untis_lenght'] !=null && $request_data['lcl_untis_hieght'] !=null ){
            $all=$request_data['lcl_untis_width'] *$request_data['lcl_untis_lenght']  *$request_data['lcl_untis_hieght'];
                if($request_data['cross_weight'] > $all ){
                    $total_price = $request_data['cross_weight'] * $sub->freight_charges ;  
                }else{
                    $total_price = $all->cross_weight * $sub->freight_charges ;  

                }
          }elseif($request_data['cross_weight'] !=null)
          {
             $total_price = $request_data['cross_weight'] * $sub->freight_charges ;
         }elseif( $request_data['lcl_untis_width'] !=null && $request_data['lcl_untis_lenght'] !=null && $request_data['lcl_untis_hieght'] !=null){
                $all=$request_data['lcl_untis_width'] *$request_data['lcl_untis_lenght']  *$request_data['lcl_untis_hieght'];
                    $total_price = $request_data['cross_weight'] * $sub->freight_charges ;
         }
        
         //end to calculate total price
            
          $booking = Booking::create($request->all()+['total_price'=>$total_price]);
          // dd($request->all() , $fTL_request );

          return redirect()->route('index')->with('sucess','booking move to admin to accept it'); 
    }


   

       public function allShippment(){
        
         $quotes = Sub::paginate(5);
         // dd($quotes);
            return view('dashboard.sub.find_quote' , compact('quotes'));
    }

      public function myRequests(Request $request){
        $countries = Country::get();
        // dd($countries);
        $other_quotes = $this->offers();
        

          $subs = Sub::when([$request->search_landing , $request->search_discharge], function ($q) use ($request) {

                return $q->where([
                    ['place_discharge', 'Like','%' . $request->search_discharge . '%'],
                    ['place_landing', 'Like','%' . $request->search_landing . '%']
                ]);

            })->where('sub_id', auth()->user()->id)->latest()->paginate(5);

       // dd($request->all(),$subs->toArray());
      // dd(auth()->user()->id);
     return view('dashboard.sub.myRequests' ,compact('subs','other_quotes','countries'));
    }

      public function sub_offers(Request $request){
        $countries = Country::get();
        // dd($countries);
        $other_quotes = $this->offers();
        // dd($other_quotes);

      $subs = Sub::when([$request->search_landing , $request->search_discharge], function ($q) use ($request) {

            return $q->where([
                ['place_discharge', 'Like','%' . $request->search_discharge . '%'],
                ['place_landing', 'Like','%' . $request->search_landing . '%']
            ]);

        })->where('sub_id', auth()->user()->id)->latest()->paginate(5);

       // dd($request->all(),$subs->toArray());
      // dd(auth()->user()->id);
     return view('dashboard.sub.sub_offers' ,compact('subs','other_quotes','countries'));
    }

     public function request(Request $request){
        $countries = Country::get();
        // dd($countries);
        $other_quotes = Sub::where([
            ['sub_id' , auth()->user()->id],
            ['offer' ,1],
        ])
        ->where(function($q)use($request){
             // $date = new \Carbon\Carbon::parse('created_at')->addHour('time_per_hour');
            $q->where(DB::raw('ADDTIME(created_at, SEC_TO_TIME(time_per_hour * 3600))'), '>=', now());
        })->get();

         //dd($other_quotes);

      $subs = Sub::when([$request->search_landing , $request->search_discharge], function ($q) use ($request) {

            return $q->where([
                ['place_discharge', 'Like','%' . $request->search_discharge . '%'],
                ['place_landing', 'Like','%' . $request->search_landing . '%']
            ]);

        })->where([
            ['sub_id',  auth()->user()->id],
            ['offer'  , null],
        ])->latest()->paginate(5);

       // dd($request->all(),$subs->toArray());
      // dd(auth()->user()->id);
     return view('dashboard.sub.subcontractor_upload_request' ,compact('subs','other_quotes','countries'));
    }

      public function compare(Request $request){
        $countries = Country::get();
        // dd($countries);
        $other_quotes = $this->offers();


          // dd($other_quotes );

        $subs = Sub::when([$request->search_landing , $request->search_discharge], function ($q) use ($request) {
            return $q->where([
                ['place_discharge', 'Like','%' . $request->search_discharge . '%'],
                ['place_landing', 'Like','%' . $request->search_landing . '%']
            ]);
        })->where('sub_id', auth()->user()->id)->latest()->paginate(5);

       // dd($request->all(),$subs->toArray());
      // dd(auth()->user()->id);
     return view('dashboard.sub.compare' ,compact('subs','other_quotes','countries'));
    }


    public function delete(  Request $request){
      Sub::where('id',$request->id)->delete();
        return redirect('/sub/requests');

     }

    public function create()
    {
        //type to know type is lcl or fcl 
        if(request()->segment(1)== 'sub_lcl' ){
            $type = 'LCL';
        }else
        {  
            $type = 'FCL';
        }
        return view('dashboard.sub.create_sub',compact('type'));
    }//end of create

     public function store(Request $request)
    {
        // dd($request->all());
        $request_data = $request->all();
        if(isset($request_data['offer']))
        {
            if($request_data['offer'] == 'on')
            {
                $request_data['offer']= 1;
            }elseif ($request_data['offer'] == 'off')
            $request_data['offer']= 0;
        }



        $request->validate([
            'place_landing' => 'required',
            'place_discharge' => 'required',
            'port_landing' => 'required',
            'port_discharge' => 'required',
            'commodity' => 'required',
            'container_type' => 'nullable',
            'charge_type' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
            'shipping_line' => 'required',
            'date_landing' => 'required',
            'date_discharge' => 'required',
            'transit_time' => 'required',
            'freight_charges' => 'required',
            'origin_charges' => 'required',
            'destination_charges' => 'required',
            'offer' => 'nullable|integer',
            'time_per_hour' => 'nullable|integer',
            'language' => 'required',
            'weight' => 'nullable|integer',
            'dns' => 'required|integer',
        ]);


        array_shift($request_data);
        $request_data['sub_id']=auth()->user()->id;
        

    


        Sub::create($request_data);

        session()->flash('success', __('request.updated_successfully'));
        return redirect('/sub/requests');
    }//end of store

    public function edit($id)
    {
     $sub = Sub::where('id',$id)->first();

        return view('dashboard.sub.edit_sub', compact('sub'));
    }//end of edit

    public function update(Request $request, Sub $sub)
    {
        $request_data= $request->all();
        // dd($request_data);
        if(isset($request_data['offer'])&&$request_data['offer'] == 'on')
        {
            $request_data['offer']= 1;
        }elseif (! isset($request_data['offer'])||$request_data['offer'] == 'off')
            $request_data['offer']= 0;

         $request->validate([
            'place_landing' => 'required',
            'place_discharge' => 'required',
            'port_landing' => 'required',
            'port_discharge' => 'required',
            'commodity' => 'required',
            'container_type' => 'nullable',
            'charge_type' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
            'shipping_line' => 'required',
            'date_landing' => 'required',
            'date_discharge' => 'required',
            'transit_time' => 'required',
            'freight_charges' => 'required|integer',
            'origin_charges' => 'required|integer',
            'destination_charges' => 'required|integer',
             'offer' => 'nullable|integer',
            'time_per_hour' => 'nullable|integer',
            'language' => 'required',
            'weight' => 'nullable|integer',

            
        ]);
        array_shift($request_data);
        Sub::where( 'id' , $request->id )->update($request_data);
        session()->flash('success', __('request.updated_successfully'));
        return redirect('/sub/requests');

    }//end of update


    public function account()
    {
        $user = User::where('id' , auth()->user()->id )->with('company')->first();
        
        return view('dashboard.sub.account' , compact('user'));
    }



}
