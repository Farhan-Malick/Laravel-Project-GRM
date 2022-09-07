<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
      
    function father()
    {
        return $this->belongsTo(RequestCategory::class,'cat_id','id');
    }
    function children()
    {
        return $this->hasMany(RequestCategory::class,'cat_id');
    }
    function requests()
    {
        return $this->hasMany(Add_Request::class,'id','sub_type');
    }
    function m_types()
    {
        return $this->hasMany(Add_Request::class,'id','m_type');
    }
}
