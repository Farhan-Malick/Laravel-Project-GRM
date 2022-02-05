<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Entities\Notifiable;

class Header extends Model
{
    use HasFactory;
    protected $table = 'headers';
    protected $primarykey = 'id';
    protected $fillable = ['heading','title','image','image2'];
}
