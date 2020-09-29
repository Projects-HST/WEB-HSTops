<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liveevent extends Model
{
    use HasFactory;
    protected $table='live_events';

    protected $fillable = ['title_ta','title_en','live_url','status','updated_at','updated_by','created_by','created_at'];


}
