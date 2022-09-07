<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersAd extends Model
{
    use HasFactory;
    protected $table = 'users_ads';
    protected $primarykey = 'id';
    protected $fillable = ['title','description','price','location',
    'image1','image2','image3','image4','image5','image6','image7','image8','image9','image10','image11','image12'];
 
}
