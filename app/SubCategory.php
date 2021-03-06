<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'name','category_id' 
    ];

    public function products()
    {
        return $this->hasMany(Product::class);

    }//end of products

        public function category()
    {
        return $this->belongsTo(Category::class);

    }//end of category

}//end of model
