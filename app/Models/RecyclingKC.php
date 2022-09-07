<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecyclingKC extends Model
{
    use HasFactory;
    protected $table = 'recycling_k_c_s';
    protected $primarykey = 'id';
    protected $fillable = ['heading','p1','p2','p3','p4'];
}
