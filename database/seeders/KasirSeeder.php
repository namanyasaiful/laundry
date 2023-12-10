<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(User $user): void
    {
        $user->nama             = 'Kasir';
        $user->ussername        = 'kasir@gmail.com';
        $user->password         = Hash::make('kasir');
        $user->role_id          = '2';
        $user->save();
    }
}
