<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usermastermodel extends Model
{
    use HasFactory;

    protected $table='user_master';

    protected $fillable = ['status','created_by','updated_by'];

}
