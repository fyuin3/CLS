<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    // protected $fillable['nama','nrp']; whitelist
    protected $guarded = []; //blacklist
    protected $table = 'register';
    public $timestamps = true;

}
