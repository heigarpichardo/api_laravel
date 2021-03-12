<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    protected $table = "Colors";
    protected $primaryKey = "idcolor";
    protected $fillable = ["color"];

    public $incrementing = true;
    public $timestamps = false;
}
