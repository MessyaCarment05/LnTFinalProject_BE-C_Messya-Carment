<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faktur extends Model
{
    use HasFactory;
    protected $table='faktur';
    protected $fillable=[
        'category_id',
        'nama_barang',
        'harga',
        'jumlah',
        'alamat',
        'kodePos',
        'subTotal',
        'totalAll',
    
    ];
}
