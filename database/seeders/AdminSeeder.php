<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the first admin user
        Admin::factory()->create([
            'name' => 'Super Admin',
            'email' => 'ngenit@gmail.com',
            'password' => Hash::make('password'),
        ]);
        Admin::factory()->create([
            'name' => 'Khandker Shahed',
            'email' => 'khandkershahed23@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
