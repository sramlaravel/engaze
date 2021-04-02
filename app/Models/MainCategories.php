<?php

namespace App\Models;

use App\Observers\MainCategoryObserver;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;
class MainCategories extends Model
{

    protected $table='categories';
    protected $fillable=['id','name','slug', 'created_at', 'updated_at'];



    public function scopeSelection($query)
    {

        return $query->select('id','name','slug' );
    }

    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('assets/' . $val) : "";

    }

    public function getActive()
    {
        return $this->statu == 1 ? 'مفعل' : 'غير مفعل';

    }

//    public function scopeDefaultCategory($query){
//        return  $query -> where('statu',0);
//    }

//
//      // get all translation categories
//    public function categories()
//    {
//        return $this->hasMany(self::class, 'translation_of');
//    }
//
//
    public function items(){
        return $this->hasMany('App\Models\item','category_id');

    }

//
//
//    public function vendors(){category_id
//
//        return $this -> hasMany('App\Models\Vendor','category_id','id');
//    }

}
