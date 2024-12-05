<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    
    protected  $table  = 'about';
    protected $primaryKey ='id';
    protected $fillable = ['id','about'];
    public $timestamp = false;

}