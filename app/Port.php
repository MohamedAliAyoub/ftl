<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    protected $fillable = ['country_id', 'title'];

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
