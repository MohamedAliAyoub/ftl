<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    protected $fillable = ['country_id', 'total'];

    public function ports()
    {
        // this From ports
        return $this->morphMany(TenderPort::class, 'parent');
    }

    public function country()
    {
        // this destination countries
        return $this->belongsTo(Country::class);
    }

    public function countries()
    {
        // this destination countries
        return $this->hasMany(TenderDestinationCountry::class);
    }
}
