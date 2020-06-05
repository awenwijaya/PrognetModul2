<?php

 namespace App;

 use Illuminate\Database\Eloquent\Model;

 class Product extends Model
 {


    protected $table = 'products';

     protected $fillable = [
     'product_name',
     'price',
     'description',
     'stock',
     'weight',
    ];

    protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    ];

    public function product_category_detail(){
      return $this->hasMany('App\Product_Category_Detail','product_id','id');
  }

  public function product_image(){
      return $this->hasMany('App\Product_image','product_id','id');
  }

  public function category(){
      return $this->belongsToMany('App\Category','product_category_details', 'product_id', 'category_id')->withPivot('id');
  }

  public function discount(){
      return $this->hasMany('App\Discount', 'id_product', 'id');
  }

 }