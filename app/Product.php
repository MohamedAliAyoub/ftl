<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    

    protected $fillable = [
        'name', 'sub_category_id','image','price','stock','description'
    ];
   


    public function getImagePathAttribute()
    {
        return asset('uploads/product_images/' . $this->image);

    }//end of image path attribute

    public function getProfitPercentAttribute()
    {
        $profit = $this->sale_price - $this->purchase_price;
        $profit_percent = $profit * 100 / $this->purchase_price;
        return number_format($profit_percent, 2);

    }//end of get profit attribute

    public function category()
    {
        return $this->belongsTo(SubCategory::class , 'sub_category_id');

    }//end fo category

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'product_order');

    }//end of orders

}//end of model
