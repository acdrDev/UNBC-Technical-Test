<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class first_user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User([
            'name' => 'Andres',
            'lastname' => 'Gonzalez',
            'email' => 'admin@admin.com',
            'phone_number' => '1234567890',
            'password' => 'password'
        ]);

        $user->save();
    }
}
