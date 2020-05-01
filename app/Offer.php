<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{

    protected $fillable = ['desc','price','time','image'];
    protected $appends = ['image_path'];
    public function getImagePathAttribute()
    {
        return asset('uploads/offer_images/' . $this->image);

    }
    //
}
