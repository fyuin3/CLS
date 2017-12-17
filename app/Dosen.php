<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    // protected $fillable['nama','nrp']; whitelist
    protected $guarded = []; //blacklist
    protected $table = 'dosen';
    public $timestamps = true;
}
