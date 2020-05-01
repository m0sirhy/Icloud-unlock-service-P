<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //

    protected $fillable = ['name','desc','price','time','image','category_id'];
    protected $appends = ['image_path'];
    public function getImagePathAttribute()
    {
        return asset('uploads/item_images/' . $this->image);

    }
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
