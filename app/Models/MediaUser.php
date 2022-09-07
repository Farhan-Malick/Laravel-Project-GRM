<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaUser extends Model
{
    use HasFactory;
    protected $table = 'media_users';
    protected $primarykey = 'id';
    protected $fillable = ['file','video'];
    public function media()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
