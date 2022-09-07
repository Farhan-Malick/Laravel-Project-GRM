<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $primarykey = 'id';
    protected $fillable = [ 'h1_b1', 'p1_b1' ,'h2_b2','p2_b2',
                            'h3_b3', 'p3_b3' ,'h4_b4','p4_b4',
                            'h5_b5', 'p5_b5' ,'h6_b6','p6_b6',
                        ];
}
