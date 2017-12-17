<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forecasting extends Model
{
    // protected $fillable['nama','nrp']; whitelist
    protected $guarded = []; //blacklist
    protected $table = 'forecasting';
    public $timestamps = true;
}
