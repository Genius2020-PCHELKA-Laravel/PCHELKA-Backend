<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    public $fillable = ['name', 'details', 'imgPath', 'type', 'hasFrequency', 'couponId', 'materialPrice', 'hourPrice'];

    public function Coupon()
    {
        return $this->belongsTo('App\Models\Coupon', 'id');
    }

    public function Bookings()
    {
        return $this->hasMany('App\Models\Booking', 'serviceId');
    }

    public function ServicesQuestions()
    {
        return $this->hasMany('App\Models\ServicesQuestions', 'serviceId');
    }

    public function Providers()
    {
        return $this->belongsToMany('App\Models\ServiceProvider', 'providerservices');
    }
}
