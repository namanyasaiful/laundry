<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(User $user): void
    {
            $user->nama             = 'Admin';
            $user->ussername        = 'admin@gmail.com';
            $user->password         = Hash::make('admin');
            $user->role_id          = '1';
            $user->save();
    }
}

