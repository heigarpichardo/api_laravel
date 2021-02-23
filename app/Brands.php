<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $primaryKey = "idbrand";
    protected $fillable = ["brand"];

    public $incrementing = true;
    public $timestamps = false;
}
