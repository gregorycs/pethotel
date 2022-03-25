<?php

namespace Database\Seeders;

use App\Models\TypePet as ModelsTypePet;
use Illuminate\Database\Seeder;

class TypePet extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typePet = new ModelsTypePet();
        $typePet->description = 'perro';
        $typePet->save();

        $typePet2 = new ModelsTypePet();
        $typePet2->description = 'gato';
        $typePet2->save();
    }
}
