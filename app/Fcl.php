<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fcl extends Model
{
     protected $fillable = [
    	'container_type',
    	'container_quantity',
    	'ftl_request_id', 	
    ];
}
