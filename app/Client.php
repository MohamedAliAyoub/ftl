<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Client extends Authenticatable 

{
    use Notifiable;

     protected $guard = 'clients';
     
     protected $fillable = [
        'name', 'phone','address','email','password'
    ];
    protected $guarded = [];

    protected $casts = [
        'phone' => 'array'
    ];

    public function getNameAttribute($value)
    {
        return ucfirst($value);

    }//end of get name attribute

    public function orders()
    {
        return $this->hasMany(Order::class);

    }//end of orders


}//end of model
