<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustryProfile extends Model
{
    use HasFactory;
      protected $table = 'industry_profiles';
    protected $primarykey = 'id';
    protected $fillable = 
    [
        'name','company_email','phone','company_website',
        'description','companyfy','address','vat_id','tax_id',
        'reg_id','court','linkedin','facebook','twitter','insta',
        'image','file','warehouse'
    ];
    public function IndustryData()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
