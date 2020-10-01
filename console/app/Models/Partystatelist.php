<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partystatelist extends Model
{
    use HasFactory;

    protected $table='party_state_info';

    protected $fillable = ['state_name_ta', 'state_name_en','state_logo','status','created_by','updated_by'];
}
