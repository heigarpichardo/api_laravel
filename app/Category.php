<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "Category";
    protected $primaryKey = "idcategory";
    protected $fillable = ["category"];

    public $incrementing = true;
    public $timestamps = false;
}