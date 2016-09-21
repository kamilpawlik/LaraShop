<?php

namespace App\Http\Controllers\Frontend;

use App\Configuration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
