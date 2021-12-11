<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $fillable=['codeno', 'name', 'photo', 'price', 'discount', 'description', 'brand_id','subcategory_id'];

    public function brand($value='')
    {
        return $this->belongsTo('App\Brand');
    }
    public function Subcategory($value='')
    {
        return $this->belongsTo('App\Subcategory');
    }
     public function order($value='')
    {
        return $this->belongsToMany('App\Item','orderdetail')
            ->withPivot('qty')
            ->withTimestamps();
    }


}

