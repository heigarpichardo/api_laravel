<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    protected $table = "Devices";
    protected $primaryKey = "iddevice";
    protected $fillable = ["MAC","publicIP","localIP","ticketprinter","normalprinter"];

    public $incrementing = true;
    public $timestamps = false;
}
