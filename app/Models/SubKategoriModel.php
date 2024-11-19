<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubKategoriModel extends Model
{
 protected  $table  = 'sub_kategori';
    protected $primaryKey ='id';
    protected $fillable = ['id','nama_subkategori', 'id_kategori'];
    protected $timestamp = false;

    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'id_kategori', 'id');
    }
}