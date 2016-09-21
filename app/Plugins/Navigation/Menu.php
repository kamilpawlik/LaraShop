<?php

namespace App\Plugins\Navigation;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    public function parent()
    {
        return $this->belongsTo(self::class);
    }

    public function children()
    {
        return $this->hasMany(self::class);
    }

}
