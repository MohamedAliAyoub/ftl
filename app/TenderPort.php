<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenderPort extends Model
{
    protected $fillable = [
        'port_id',
        '20D_old_price',
        '40HD_old_price',
        '20RF_old_price',
        '40RF_old_price',
        '20D_price',
        '40HD_price',
        '20RF_price',
        '40RF_price',
        '20D_quantity',
        '40HD_quantity',
        '20RF_quantity',
        '40RF_quantity',
    ];

    public function port()
    {
        return $this->belongsTo(Port::class);
    }

    public function parent()
    {
        return $this->morphTo('parent');
    }
}
