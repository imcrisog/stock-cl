<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'TestAdmin',
            'email' => 'test@example.com',
            'password' => 'test',
            'role_id' => '1',
        ]);

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
