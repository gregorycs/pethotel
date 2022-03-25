<?php

namespace Database\Seeders;

use App\Models\Sex as ModelsSex;
use Illuminate\Database\Seeder;

class Sex extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sex = new ModelsSex();
        $sex->description = 'macho';
        $sex->save();
        
        $sex2 = new ModelsSex();
        $sex2->description = 'hembra';
        $sex2->save();
    }
}
