<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_kuesiumum extends Model
{
    protected $table = "d_pasien";
    protected $fillable = ['*'];
    public $timestamps = false;
}
