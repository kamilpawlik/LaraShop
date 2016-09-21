<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function products()
    {
        $category = \App\Category::find(1);
        
        return view('category');
    }
}
