<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesProvider extends Model
{
    use HasFactory;
    protected $table = 'services_providers';
    protected $primarykey = 'id';
    protected $fillable = ['service_providers'];
    public function service_providers()
    {
        return $this->hasMany(IndustryService::class,'id','service_id');
    }
}
