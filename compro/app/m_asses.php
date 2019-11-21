<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_asses extends Model
{
    protected $table = "assessment";
    protected $fillable = ['*'];
    public $timestamps = false;
}
