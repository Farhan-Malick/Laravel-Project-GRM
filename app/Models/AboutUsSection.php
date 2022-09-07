<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsSection extends Model
{
    use HasFactory;
    protected $table = 'about_us_sections';
    protected $primarykey = 'id';
    protected $fillable = ['image','title','heading','p1','p2','p3','p4','p5','p6'];
}
