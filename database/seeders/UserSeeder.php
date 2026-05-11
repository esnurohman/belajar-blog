<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Eep',
            'username' => 'esnurohman',
            'email' => 'esnur@example.com',
            'is_admin' => true,
            'password' => Hash::make('password')
        ]);

        User::factory(5)->create();
    }
}