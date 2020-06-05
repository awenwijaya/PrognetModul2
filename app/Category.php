<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{


    protected $table = 'product_categories';

    protected $fillable = [
        'category_name',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];


    public function product_category_detail(){
        return $this->hasMany('App\Product_Category_Detail','category_id','id');
    }

    public function product(){
        return $this->belongsToMany('App\Product','product_category_details','category_id', 'product_id')->withPivot('id');
    }
}
