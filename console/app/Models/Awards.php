<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Awards extends Model
{
    use HasFactory;

    protected $table='ops_achievements';

    protected $fillable = ['achievement_date', 'achievement_title_ta','achievement_title_en','achievement_text_ta','achievement_text_en','achievement_image','status','created_by','created_at','updated_by','updated_at'];
}
