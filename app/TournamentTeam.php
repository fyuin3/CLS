<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentTeam extends Model
{
    // protected $fillable['nama','nrp']; whitelist
    protected $guarded = []; //blacklist
    protected $table = 'tournamentteam';
    public $timestamps = true;

}
