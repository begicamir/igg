<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // ✅ Import this


class HomeController extends Controller
{
    public function index()
    {
        return view('home/index');
    }

    public function index2()
    {
        return view('home/index2');
    }

    public function about()
    {
        return view('home/about');
    }

    public function contact()
    {
        return view('home/contact');
    }

    public function send(Request $request)
    {
        $data = $request->only(['name', 'email', 'message']);

        Mail::raw(
            "Email: {$data['email']}\nName: {$data['name']}\nMessage: {$data['message']}",
            function ($message) use ($data) {
                $message->to('info@igg-mo.com')
                    ->subject("New contact message from {$data['email']}");
            }
        );



        return back()->with('success', 'Message sent successfully!');
    }
}
