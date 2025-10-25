<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function blog()
    {
        return view('news/blog');
    }

    public function blogDetails()
    {
        return view('news/blogDetails');
    }
}
