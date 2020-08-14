<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $fillable = [
        'name', 
    ];

    public function products()
    {
        return $this->hasMany(SubCategory::class);

    }//end of products

}//end of model
