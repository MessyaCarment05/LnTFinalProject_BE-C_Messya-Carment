<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table='data';
    protected $fillable=[
        'category_id',
        'nama_barang',
        'harga',
        'jumlah',
        'image'
    ];
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

}
