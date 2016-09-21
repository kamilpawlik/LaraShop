<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillable = ['key', 'value'];

    public static function valueFor($key, $default = null)
    {
        if ($configurationEntry = self::where('key', $key)->first()) {
            return $configurationEntry->value;
        }

        if ($default !== null) {
            return $default;
        }

        return false;

    }
}
