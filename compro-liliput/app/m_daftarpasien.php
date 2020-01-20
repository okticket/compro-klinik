<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_daftarpasien extends Model
{
    protected $table = "h_pasien";
    protected $fillable = ['*'];
    public $timestamps = false;
}
