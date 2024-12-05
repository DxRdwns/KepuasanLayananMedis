<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    
    protected  $table  = 'member_models';
    protected $primaryKey ='id';
    protected $fillable = ['id','name','email','address','phone','nik','score','quality'];
    protected $timestamp = true;

}