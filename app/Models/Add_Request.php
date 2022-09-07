<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add_Request extends Model
{
    use HasFactory;
    protected $table = 'add__requests';
    protected $primarykey = 'id';
    protected $fillable = ['id','user_id','m_type',' p_name ',' condition ','location','weight'];

    public function request()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function Add_Request()
    {
        return $this->belongsTo(RequestCategory::class,'sub_type','id');
    }
    public function mtype()
    {
        return $this->belongsTo(RequestCategory::class,'m_type','id');
    }
    public function requestView()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
