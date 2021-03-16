<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $table   = "Tickets";
    protected $primaryKey = "idticket";
    protected $fillable = ["ticketnumber","idvehicle","join_datetime","exit_datetime","total_ticket",
                            "iduser","iddailyclose"];

    public $incrementing = true;
    public $timestamps = false;
}