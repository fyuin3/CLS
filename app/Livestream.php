<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livestream extends Model
{
    // protected $fillable['nama','nrp']; whitelist
    protected $guarded = []; //blacklist
    protected $table = 'livestream';
    public $timestamps = true;

}
