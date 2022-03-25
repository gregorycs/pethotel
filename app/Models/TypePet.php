<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePet extends Model
{
    use HasFactory;

    /**
     * relationship one to many with pet
     */
    public function pets()
    {
        return $this->hasMany('App\Models\Pet');
    }
}
