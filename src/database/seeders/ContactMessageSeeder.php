<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{
    public function run(): void
    {
        ContactMessage::create([
            'name' => 'User Demo',
            'email' => 'user@mail.com',
            'message' => 'Apakah coffee shop buka setiap hari?',
        ]);
    }
}

