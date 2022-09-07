<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestArticle extends Model
{
    use HasFactory;
    protected $table = 'latest_articles';  
    protected $primarykey = 'id';
    protected $fillable = ['image','date','title'];
}
