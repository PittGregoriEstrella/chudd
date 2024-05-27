<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'chudd',
            'email' => 'chudd@example.com',
            'password' => Hash::make('chudd'), // Replace 'password' with a secure password
            
        ]);
    }
}
