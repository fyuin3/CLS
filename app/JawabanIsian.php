<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JawabanIsian extends Model
{
    // protected $fillable['nama','nrp']; whitelist
    protected $guarded = []; //blacklist
    protected $table = 'jawabanisian';
    public $timestamps = true;
}
