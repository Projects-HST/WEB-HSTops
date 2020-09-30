<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutops extends Model
{
    use HasFactory;

    protected $table='ops_personal_life';

    protected $fillable = ['personal_life_text_ta', 'personal_life_text_en'];

}
