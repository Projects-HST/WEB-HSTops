<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partyelectionlist extends Model
{
    use HasFactory;

    protected $table='party_election_info';

    protected $fillable = ['state_info_id','election_type', 'election_year','party_leader_ta','party_leader_en','seats_won','status','created_by','updated_by'];

}
