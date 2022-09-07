<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerTender extends Model
{
    use HasFactory;
    protected $table = 'seller_tenders';
    protected $primarykey = 'id';
    protected $fillable = ['description','odate','cdate','location','amount','status', 'approve'];
    public function Seller_tender()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function Sellertender()
    {
        return $this->hasMany(CommentsForTenders::class,'tender_id','id');
    }
}
