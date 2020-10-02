<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutparty extends Model
{
    use HasFactory;

    protected $table='about_party';

    protected $fillable = ['party_text_ta', 'party_text_en'];

}
