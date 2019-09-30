<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataUsaha extends Model
{
    protected $table = 'data_usaha';
    protected $fillable = ['id','wirausaha_id','nama_usaha','aset','jenis_usaha','golongan','status'];
}
