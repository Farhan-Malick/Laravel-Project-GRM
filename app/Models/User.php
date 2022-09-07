<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    protected $primarykey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lname',
        'cname',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function user()
    {
        return $this->hasMany(ClientsAd::class);
    }
    public function userstore()
    {
        return $this->hasOne(ClientsAd::class, 'user_id','id');
    }
    public function addcompanydetail()
    {
        return $this->hasOne(AddCompanyDetail::class);
    }
    public function Req_user()
    {
        return $this->hasMany(Add_Request::class,'user_id','id');
    }
    public function med()
    {
        return $this->hasMany(MediaUser::class);
    }
    public function docs()
    {
        return $this->hasMany(Document::class);
    }
    public function user_tender()
    {
        return $this->hasMany(SellerTender::class);
    }
     public function Membership_For_User()
    {
        return $this->hasMany(MembershipForm::class, 'user_id','id');
    }
    public function addIndustryDetail()
    {
        return $this->hasOne(IndustryProfile::class);
    }
    public function user_Services()
    {
        return $this->hasMany(IndustryService::class);
    }
    public function IndustryPortfolio()
    {
        return $this->hasMany(IndustryPortfolio::class);
    }
    public function nUser()
    {
        return $this->hasMany(CommentsForTenders::class, 'user_id','id');
    }
  
}
