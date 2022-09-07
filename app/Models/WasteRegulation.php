<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WasteRegulation extends Model
{
    use HasFactory;
    protected $table = 'waste_regulations';  
    protected $primarykey = 'id';
    protected $fillable = [ 'country_id','eu_members','oecd','link1','link2','link3','link4','link5','link6','link7','link8'];
    public function WasteRegulations()
    {
        return $this->belongsTo(WasteRKCCountry::class,'country_id','id');
    }
}

