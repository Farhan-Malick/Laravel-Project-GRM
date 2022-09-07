<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyUseGRM extends Model
{
    use HasFactory;
    protected $table = 'why_use_g_r_m_s';
    protected $primarykey = 'id';
    protected $fillable = ['heading','p1','p2','p3'];
}
