<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    // protected $fillable['nama','nrp']; whitelist
    protected $guarded = []; //blacklist
    protected $table = 'tournament';
    public $timestamps = true;

}
