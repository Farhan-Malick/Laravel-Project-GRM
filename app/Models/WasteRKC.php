<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WasteRKC extends Model
{
    use HasFactory;
    protected $table = 'waste_r_k_c_s';  
    protected $primarykey = 'id';
    protected $fillable = [ 'heading1','heading2','paragraph','image'];
}
