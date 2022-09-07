<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WasteRKCCountry extends Model
{
    use HasFactory;
    protected $table = 'waste_r_k_c_countries';  
    protected $primarykey = 'id';
    protected $fillable = [ 'country'];
    public function Country()
    {
        return $this->hasMany(WasteRegulation::class,'id','country_id');
    }
}
