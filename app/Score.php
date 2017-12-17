<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    // protected $fillable['nama','nrp']; whitelist
    protected $guarded = []; //blacklist
    protected $table = 'score';
    public $timestamps = true;

}
