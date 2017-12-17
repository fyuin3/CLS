<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    // protected $fillable['nama','nrp']; whitelist
    protected $guarded = []; //blacklist
    protected $table = 'resources';
    public $timestamps = true;

}
