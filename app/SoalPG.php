<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoalPG extends Model
{
    // protected $fillable['nama','nrp']; whitelist
    protected $guarded = []; //blacklist
    protected $table = 'soalpg';
    public $timestamps = true;

}
