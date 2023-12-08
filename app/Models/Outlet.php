<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Outlet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'tlp',
    ];

    public function User()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    
    public function Transaksi()
    {
        return $this->hasOne(Transaksi::class,  'outlet_id');
    }
}
