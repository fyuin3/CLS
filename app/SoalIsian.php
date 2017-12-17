<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoalIsian extends Model
{
    // protected $fillable['nama','nrp']; whitelist
    protected $guarded = []; //blacklist
    protected $table = 'soalisian';
    public $timestamps = true;

}
