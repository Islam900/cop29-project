<?php

namespace Database\Seeders;

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
        \App\Models\User::create([
            'full_name' => 'Cavid',
            'company_name' => 'ICTA',
            'job_title' => 'Programmer',
            'mobile_number' => '+994 50 822 13 00',
            'email_address' => 'admin@example.com',
            'type' => 'admin',
            'confirmed_status' => 1,
            'password' => Hash::make('salamadmin'),
        ]);

        \App\Models\User::create([
            'full_name' => 'Mahammad',
            'company_name' => 'ICTA',
            'job_title' => 'Programmer',
            'mobile_number' => '+994 50 822 13 00',
            'email_address' => 'dri@example.com',
            'type' => 'dri',
            'confirmed_status' => 1,
            'password' => Hash::make('salamadmin'),
        ]);

        \App\Models\User::create([
            'full_name' => 'Esqin Ceferli',
            'company_name' => 'BBC',
            'job_title' => 'Journalist',
            'mobile_number' => '+994 50 822 13 00',
            'email_address' => 'user@example.com',
            'type' => 'user',
            'represent' => 'Merhaba',
            'confirmed_status' => 1,
            'password' => Hash::make('salamadmin'),
        ]);

    }
}
