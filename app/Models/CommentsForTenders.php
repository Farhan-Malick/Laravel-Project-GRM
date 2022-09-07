<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentsForTenders extends Model
{
    use HasFactory;
    protected $table = 'comments_for_tenders';
    protected $primarykey = 'id';
    protected $fillable = ['comment','price'];
    public function commentsForTenders()
    {
        return $this->belongsTo(SellerTender::class,'user_id');
    }
    public function buyerTender()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
