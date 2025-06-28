<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Dimas Fatchurroziq',
            'username' => 'Dimas',
            'email' => 'dimasfatchurroziq@gamil.com',
            'password' => Hash::make('password123'),
        ]);

        User::factory(5)->create();
    }
}
