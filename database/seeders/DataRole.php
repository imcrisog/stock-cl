<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class DataRole extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Roles::create([
            'id' => '1',
            'name' => 'admin',
        ]);
        
        Roles::create([
            'id' => '2',
            'name' => 'invspe',
        ]);
        
        Roles::create([
            'id' => '3',
            'name' => 'seller',
        ]);
    }
}