<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'level'    => 1,
            'username'    => 'admin',
            'full_name'    => 'ADMIN',
            'email'    => 'admin@gmail.com',
            'password'    => Hash::make(12345678),
        ]);
    }
}
