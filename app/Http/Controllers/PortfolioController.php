<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    
    public function portfolio1()
    {
        return view('portfolio/portfolio1');
    }
    
    public function portfolio2()
    {
        return view('portfolio/portfolio2');
    }
    
    public function portfolio3()
    {
        return view('portfolio/portfolio3');
    }
    
    public function portfolioDetails()
    {
        return view('portfolio/portfolioDetails');
    }
    
    public function contact()
    {
        return view('contact');
    }

}
