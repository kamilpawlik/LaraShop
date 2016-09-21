<?php
namespace App\Extensions;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Migrations\Migrator;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ShopMigrator extends Migrator
{
    public function resolve($file)
    {
        $slideDepth = 4;

        if(preg_match('/^[0-9]+_[A-Z-a-z]/', $file)) {
            $slideDepth = 1;
        }

        $class = Str::studly(implode('_', array_slice(explode('_', $file), $slideDepth)));
        return new $class;
    }
}