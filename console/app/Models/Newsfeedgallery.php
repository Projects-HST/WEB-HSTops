<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsfeedgallery extends Model
{
    use HasFactory;

    protected $table='nf_image_gallery';

    protected $fillable = ['nf_id', 'nf_image'];


}
