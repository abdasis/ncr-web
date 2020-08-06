<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function contactUs()
    {
        return view('frontend.pages.contactus');
    }

    public function index()
    {
        return view('welcome');
    }

    public function aboutUs()
    {
        return view('frontend.pages.aboutus');
    }

    public function lokerPekerjaan()
    {
        return view('frontend.pages.loker');

    }
}
