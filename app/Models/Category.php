<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primarykey = 'id';
    protected $guarded = [];
    
    function Parent()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    function childs()
    {
        return $this->hasMany(Category::class,'category_id');
    }
    function cat()
    {
        return $this->hasMany(Add_Request::class,'id');
    }
    public function category()
    {
        return $this->hasMany(ClientsAd::class,'id','cat_id');
    }
}
