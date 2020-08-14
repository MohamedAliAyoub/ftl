<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    
     protected $fillable = ['name', 'location', 'street' , 'city' , 'postal_code' , 'website' , 'about', 'user_id'];
}
