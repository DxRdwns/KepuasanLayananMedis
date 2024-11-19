<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class KategoriModel extends Model
{
    protected  $table  = 'kategori';
    protected $primaryKey ='id';
    protected $fillable = ['id','name_kategori'];
    protected $timestamp = true;

    
     public function subKategoris()
    {
        return $this->hasMany(SubKategoriModel::class, 'id_kategori', 'id');
    }
}