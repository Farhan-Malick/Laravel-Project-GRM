<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustryService extends Model
{
    use HasFactory;
    protected $table = 'industry_services';
    protected $primarykey = 'id';
    protected $fillable = ['service_id','title','services_type','detail','location','duration','approve'];
    
    public function IndustryServices()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function services_Providers()
    {
        return $this->belongsTo(ServicesProvider::class,'service_id','id');
    }
}
