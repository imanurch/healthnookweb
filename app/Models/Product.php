<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Jenisproduct;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id_kategori'];
    protected $primaryKey = 'id_product';
    protected $fillable = ['nama_product','id_kategori','harga','stok','foto_product'];

    public function jenisproduct(){
        return $this->belongsTo(Jenisproduct::class,'id_kategori');
    }
}
