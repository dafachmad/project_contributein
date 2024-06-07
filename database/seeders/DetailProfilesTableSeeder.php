<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetailProfile;

class DetailProfilesTableSeeder extends Seeder
{
    public function run()
    {
        DetailProfile::create([
            'user_id' => 1,
            'first_name' => 'John',
            'mid_name' => 'A',
            'last_name' => 'Doe',
            'gender' => 'M',
            'date_birth' => '1990-01-01',
            'resume' => 'Software Developer',
            'profile' => null,
            'background' => null,
        ]);

        DetailProfile::factory(10)->create(); // Menggunakan factory untuk membuat detail profile tambahan
    }
}

