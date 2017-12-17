<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JawabanPG extends Model
{
    // protected $fillable['nama','nrp']; whitelist
    protected $guarded = []; //blacklist
    protected $table = 'jawabanpg';
    public $timestamps = true;

}
