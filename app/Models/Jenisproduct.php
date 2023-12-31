<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Product;

class Jenisproduct extends Model
{
    use HasFactory;

    protected $guarded = ['id_kategori'];
    protected $primaryKey = 'id_kategori';

    public function product(){
        return $this->hasMany(Product::class,'id_product');
    }
}
