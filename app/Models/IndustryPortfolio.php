<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustryPortfolio extends Model
{
    use HasFactory;
    protected $table = 'industry_portfolios';
    protected $primarykey = 'id';
    protected $fillable = ['file','video'];
    public function portFolio()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
