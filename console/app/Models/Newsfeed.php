<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsfeed extends Model
{
    use HasFactory;
    protected $table='news_feed';


    protected $fillable = ['nf_category_id','nf_profile_type','news_date','title_ta','title_en','description_ta','description_en','nf_cover_image','gallery_status','view_count','likes_count','share_count','comments_count','expiry_at','status','updated_at','updated_by','created_by','created_at'];


}
