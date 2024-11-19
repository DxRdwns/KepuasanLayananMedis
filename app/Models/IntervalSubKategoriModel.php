<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IntervalSubKategoriModel extends Model
{
    //
     protected  $table  = 'interval_sub_kategori';
    protected $primaryKey ='id';
    protected $fillable = ['id','nama_interval', 'bobota_interval'];
    protected $timestamp = false;
}