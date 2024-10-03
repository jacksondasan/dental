<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345'),
            'user_type' => 'admin',
            'name' => 'Admin User', // Add the name field
        ]);

        User::create([
            'username' => 'user1',
            'email' => 'user1@example.com',
            'password' => Hash::make('12345'),
            'user_type' => 'user',
            'name' => 'Regular User', // Add the name field
        ]);
    }
}
