<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class Adminlogin extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;


    protected $table='admin_user_master';

    protected $fillable = ['full_name', 'email_id','password','phone_number','gender','address','qualification','profile_pic','id_proof_type','id_proof_file','last_login_info','login_count','status','created_by','created_at','updated_by','updated_at'];

}
