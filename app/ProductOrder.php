<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    public $table = 'product_order';

    public $fillable = ['product_id', 'order_id', 'quantity'];

    public $timestamps = false;

    public function product(){
    	return $this->belongsTo(Product::class);
    }
}
