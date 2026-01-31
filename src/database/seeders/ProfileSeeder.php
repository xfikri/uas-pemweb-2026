<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'coffee_name' => 'Kopi Senja',
            'description' => 'Coffee shop lokal dengan cita rasa nusantara.',
            'address' => 'Jl. Sudirman No. 10',
            'phone' => '08123456789',
            'email' => 'info@kopisenja.com',
        ]);
    }
}
