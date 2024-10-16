<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('super-admin');

        $officer = User::create([
            'name' => 'Officer',
            'username' => 'officer',
            'email' => 'officer@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $officer->assignRole('officer');

        $vendor = User::create([
            'name' => 'Supplier',
            'username' => 'supplier',
            'email' => 'supplier@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $vendor->assignRole('supplier');
    }
}
