<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	 protected $fillable = [
        'client_id', 'total_price',
    ];
    protected $guarded = [];

    public function client()
    {
        return $this->belongsTo(client::class);

    }//end of user

    public function items()
    {
      return $this->hasMany(ProductOrder::class);

    }//end of products

}//end of model
