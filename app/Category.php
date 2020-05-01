<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','section'];

    //
    public function items()     

    {
        return $this->belongsToMany('App\Item');
    }
}
