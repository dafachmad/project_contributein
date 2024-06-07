<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'user_id' => '1',
            'username' => 'admin',
            'password' => Hash::make('admincontributein'),
            'email' => 'admin@contributein.com',
            'phone' => '082111223344',
            'joined_since' => now(),
        ]);

        User::factory(10)->create(); // Menggunakan factory untuk membuat user tambahan
    }
}