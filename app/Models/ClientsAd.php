<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientsAd extends Model
{
    use HasFactory;
    protected $table = 'clients_ads';
    protected $primarykey = 'id';
    protected $fillable = ['main_type','sub_category',' p_name ','title','description',' condition ',' quantity_avl ',' unit_weight ', ' product_weight ',
                            ' supply_type ',' currency ','price',' p_terms ',' col_address ',' country ',
                            'zip_code','listing_options','Payment_terms','location',
                            'image1','image2','image3','image4','image5','image6','image7','image8','image9',
                            'image10','image11','image12','image13','image14','image15','approve'];
    
    public function clientuser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function maintype()
    {
        return $this->belongsTo(Category::class,'main_type','id');
    }
    function username()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    // public function category_id()
    // {
    //     return $this->belongsTo(Category::class,'category_id','id');
    // }
    public function Client_ads_cat()
    {
        return $this->belongsTo(Category::class,'sub_category','id');
    }
    
}
