<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        User::creat([
            'name' => 'Manager',
            'roll_id' => 1,
            'email' => 'mage@companygmail.com',
            'password' => Hash::make('secret'),
        ]);
    }
}
