<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = ['name','breed','age', 'sex_id', 'type_pet_id'];

    /**
     * relationship one to many (inverse) with customer
     */
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }

    /**
     * relationship one to many (inverse) with sex
     */
    public function sex()
    {
        return $this->belongsTo('App\Models\Sex');
    }

    /**
     * relationship one to many (inverse) with type pet
     */
    public function typePet()
    {
        return $this->belongsTo('App\Models\TypePet');
    }
}
