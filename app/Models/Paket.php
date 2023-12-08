<?php

namespace App\Models;

use App\Models\Outlet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $fillable = [
        'outlet_id',
        'jenis',
        'nama_paket',
        'harga'
    ];

    public function outlet()
    {
        return $this->hasOne(Outlet::class, 'id', 'outlet_id');
    }

    use HasFactory;
}

