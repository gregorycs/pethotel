<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationForm extends Model
{
    use HasFactory;

    protected $fillable = ['entry_date','release_date','mobility', 'observation'];

    /**
     * relationship one to many (inverse) with customer
     */
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}
