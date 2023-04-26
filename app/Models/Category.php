<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'CategoryName'
    ];

    public function book(){
        return $this->hasMany(Barang::class,'category_id');
    }
}
