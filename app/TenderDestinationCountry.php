<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenderDestinationCountry extends Model
{
    protected $fillable = ['country_id', 'tender_id'];

    public function ports()
    {
        // this destination ports
        return $this->morphMany(TenderPort::class, 'parent');
    }

    public function country()
    {
        // this destination ports
        return $this->belongsTo(Country::class);
    }

    public function tender()
    {
        return $this->belongsTo(Tender::class);
    }
}
