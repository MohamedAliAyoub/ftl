<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FTL_request extends Model
{
    protected $fillable = [
    	'country_loading',
    	'country_discharge',
    	'port_loading',
    	'port_discharge',
    	'request_date',
    	'type',
    	'cross_weight',
    	'name',
    	'email',
    	'phone',
    	'company_name',
    	'note',
    	'file',
    	'lcl_total_volume',
    	'lcl_untis_lenght',
    	'lcl_untis_width',
    	'lcl_untis_hieght',
    	'lcl_untis_quantity',
    	'bulk_type',
    	'bulk_loading_rate',
    	'bulk_discharge_rate',
    	'lcl_type',
        'client_id',
        'catgory_id',
        'product_id',
        'imo',
    ];

}
