<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Admin::create([
            'name' => 'Mohamed Admin',
            'email' => 'mohamedadmin@gmail.com',
            'password' => Hash::make(123456789), // قم بتغيير كلمة المرور
        ]);
    }
}
