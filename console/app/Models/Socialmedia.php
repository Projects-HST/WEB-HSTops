<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socialmedia extends Model
{
    use HasFactory;

    protected $table='social_media';

    protected $fillable = ['sm_title', 'sm_url','status','created_by','updated_by'];

}
