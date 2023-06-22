<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();
        
        User::create([
            'name' => 'Daffa Fahrizal',
            'role_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('daffa123'),
        ]);
        
        User::create([
            'name' => 'Budi',
            'role_id' => 1,
            'email' => 'budi@gmail.com',
            'password' => Hash::make('budi123'),
        ]);
    }
}
