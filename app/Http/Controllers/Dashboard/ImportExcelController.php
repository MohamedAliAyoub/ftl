<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use DB;
use Excel;
use App\Sub;


class ImportExcelController extends Controller
{
    function index()
    {
     $data = DB::table('tbl_customer')->orderBy('id', 'DESC')->get();
     return view('dashboard.sub.import_excel', compact('data'));
    }

    function import(Request $request)
    {

     $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
     ]);

     $path = $request->file('select_file')->getRealPath();

     $data = Excel::load($path)->get();
     $dns =rand(0,999999);

     if($data->count() > 0)
     {

        // dd($data);
      foreach($data->toArray() as $key => $row)
      {
         if(isset($row['time_per_hour'])&& isset($row['offer']) && !isset($row['weight']) )
        {
           // dd($key, $row);
        $insert_data[] = array(
         'place_landing'     => $row['place_landing'],
         'place_discharge'   => $row['place_discharge'],
         'port_landing'      => $row['port_landing'],
         'port_discharge'    => $row['port_discharge'],
         'commodity'         => $row['commodity'],
         'container_type'   => $row['container_type'],
         'charge_type'      => $row['charge_type'],
         'valid_from'        => $row['valid_from'],
         'valid_to'          => $row['valid_to'],
         'shipping_line'     =>$row['shipping_line'],
         'date_landing'     =>$row['date_landing'],
         'date_discharge'   =>$row['date_discharge'],
         'transit_time'     =>$row['transit_time'],
         'freight_charges'  =>$row['freight_charges'],
         'origin_charges'   =>$row['origin_charges'],
         'destination_charges'=>$row['destination_charges'],
         'offer'              =>$row['offer'],
         'time_per_hour'      =>$row['time_per_hour'],
         'language'            =>$row['language'],
         'sub_id'             =>auth()->user()->id,
         'type'             =>'fcl',
         'dns'             =>$row['dns'],
         'created_at'=> now()
        );

    }elseif(isset($row['weight']) )
        {
           // dd($key, $row);
        $insert_data[] = array(
         'place_landing'     => $row['place_landing'],
         'place_discharge'   => $row['place_discharge'],
         'port_landing'      => $row['port_landing'],
         'port_discharge'    => $row['port_discharge'],
         'commodity'         => $row['commodity'],
         'charge_type'      => $row['charge_type'],
         'valid_from'        => $row['valid_from'],
         'valid_to'          => $row['valid_to'],
         'shipping_line'     =>$row['shipping_line'],
         'date_landing'     =>$row['date_landing'],
         'date_discharge'   =>$row['date_discharge'],
         'transit_time'     =>$row['transit_time'],
         'freight_charges'  =>$row['freight_charges'],
         'origin_charges'   =>$row['origin_charges'],
         'destination_charges'=>$row['destination_charges'],
         'offer'              =>$row['offer'],
         'time_per_hour'      =>$row['time_per_hour'],
         'language'            =>$row['language'],
         'weight'            =>$row['weight'],
         'sub_id'             =>auth()->user()->id,
         'type'             =>'lcl',
         'dns'             =>$row['dns'],
         'created_at'=> now()
        );

    }


    else{
                  // dd($key, $row);
        $insert_data[] = array(
         'place_landing'     => $row['place_landing'],
         'place_discharge'   => $row['place_discharge'],
         'port_landing'      => $row['port_landing'],
         'port_discharge'    => $row['port_discharge'],
         'commodity'         => $row['commodity'],
         'container_type'   => $row['container_type'],
         'charge_type'      => $row['charge_type'],
         'valid_from'        => $row['valid_from'],
         'valid_to'          => $row['valid_to'],
         'shipping_line'     =>$row['shipping_line'],
         'date_landing'     =>$row['date_landing'],
         'date_discharge'   =>$row['date_discharge'],
         'transit_time'     =>$row['transit_time'],
         'freight_charges'  =>$row['freight_charges'],
         'origin_charges'   =>$row['origin_charges'],
         'destination_charges'=>$row['destination_charges'],
         'language'            =>$row['language'],
         'type'             => 'fcl',
         'dns'             =>$row['dns'],
         'sub_id'             =>auth()->user()->id,
         'created_at'=> now()
        );

    }

      }

      if(!empty($insert_data))
      {

        DB::table('tbl_customer')->insert($insert_data);
      }
     }
     return back()->with('success', 'Excel Data Imported successfully.');
    }
}