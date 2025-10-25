<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function pageError()
    {
        return view('pages/pageError');
    }

    public function faq()
    {
        return view('pages/faq');
    }

    public function history()
    {
        return view('pages/history');
    }

    public function serviceDetails()
    {
        return view('pages/service/serviceDetails');
    }

    public function serviceDetails2()
    {
        return view('pages/service/serviceDetails2');
    }

    public function serviceDetails3()
    {
        return view('pages/service/serviceDetails3');
    }

    public function serviceDetails4()
    {
        return view('pages/service/serviceDetails4');
    }
    public function services()
    {
        return view('pages/services');
    }

    public function servicesTwo()
    {
        return view('pages/servicesTwo');
    }

    public function teamDetails()
    {
        return view('pages/team/teamDetails');
    }
    public function teamDetails2()
    {
        return view('pages/team/teamDetails2');
    }
    public function teamDetails3()
    {
        return view('pages/team/teamDetails3');
    }
    public function teamDetails4()
    {
        return view('pages/team/teamDetails4');
    }

}
