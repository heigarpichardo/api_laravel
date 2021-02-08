<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{    
    protected $primaryKey = "idmarca";
    
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = ["descripcion"];
}
