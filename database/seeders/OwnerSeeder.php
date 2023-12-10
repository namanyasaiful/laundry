<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ownerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(User $user): void
    {
        $user->nama             = 'owner';
        $user->ussername        = 'owner@gmail.com';
        $user->password         =  Hash::make('owner');
        $user->role_id          = '3';
        $user->save();
    }
}
