<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_daftar extends Model
{
    protected $table = "daftar";
    protected $fillable = ['*'];
    public $timestamps = false;
}
