<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = "Brands";
    protected $primaryKey = "idbrand";
    protected $fillable = ["brand"];

    public $incrementing = true;
    public $timestamps = false;
}
