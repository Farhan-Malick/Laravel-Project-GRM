<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipForm extends Model
{
    use HasFactory;
    protected $table = 'membership_forms';
    protected $primarykey = 'id';
    protected $fillable = ['status',
        'company_name','company_scope','address','country','m_type',
        'city','zip_code','company_email','company_website','industry','type','firstname',
        'last_scope','phone','gender','image','company_document',
        'name_on_card','card_no','expiration ','cvv'
    ];
    public function Membership()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    // public function industryUser()
    // {
    //     return $this->belongsTo(IndustryService::class,'industry_id','id');
    // }


}
