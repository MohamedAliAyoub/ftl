<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    
    protected $fillable = ['sub_id' , 'total_price' , 'client_id'];

}
