<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['first_name','last_name','document', 'email', 'phone', 'mobile_phone', 'address'];

    /**
     * relationship one to many with pet
     */
    public function pets()
    {
        return $this->hasMany('App\Models\Pet');
    }

    /**
     * relationship one to many with reservation form
     */
    public function reservationForms()
    {
        return $this->hasMany('App\Models\ReservationForm');
    }
}
