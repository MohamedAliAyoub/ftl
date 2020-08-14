<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    protected $table = 'tbl_customer';
    

    protected $fillable = [
    	'place_landing',
    	'place_discharge' ,
    	'port_landing', 
    	'port_discharge', 
    	'commodity', 
        'container_type',
        'charge_type', 
        'valid_from', 
        'valid_to',
        'shipping_line', 
        'date_landing', 
        'date_discharge',
    	'transit_time', 
        'freight_charges',
    	'origin_charges', 
        'destination_charges',
        'sub_id',
        'offer',
        'time_per_hour',
        'language',
        'sub',
        'type',
        'dns',
    ];


 



       

}
