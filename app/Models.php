<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $table = "Models";
    protected $primaryKey = "idmodel";
    protected $fillable = ["idbrand","model"];

    public $incrementing = true;
    public $timestamps = false;
}
