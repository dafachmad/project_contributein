<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        Contact::create([
            'user_id' => 1,
            'email' => 'contact@example.com',
            'phone_no' => '0987654321',
            'instagram_id' => 'john_instagram',
        ]);

        Contact::factory(10)->create(); // Menggunakan factory untuk membuat contact tambahan
    }
}
