<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    protected $table = "Vehicles";
    protected $primaryKey = "idvehicle";
    protected $fillable = ["plate","idcostumer","idmodel","idcolor","idcategory","monthlypayment",
                        "join_date","assigned_number"];

    public $incrementing = true;
    public $timestamps = false;
}