<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disper extends Model
{
    protected $table = 'disper';
    protected $fillable = ['id','user_id','nip','nama','alamat'];
}
