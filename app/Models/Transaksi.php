<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Outlet;
use App\Models\Paket;
use App\Models\Member;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'outlet_id',
        'member_id',
        'paket_id',
        'tgl',
        'selesai',
        'status',
        'keterangan',
    ];

    public function User()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function paket()
    {
        return $this->hasMany(Paket::class, 'id', 'paket_id');
    }

    public function Outlet()
    {
        return $this->belongsTo(Outlet::class, 'outlet_id');
    }

    public function Member()
    {
        return $this->hasOne(Member::class, 'id', 'member_id');
    }
}
