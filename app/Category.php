<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function parent()
    {
        return $this->belongsTo('category');
    }

    public function products()
    {
        return $this->hasMany('products');
    }

}
