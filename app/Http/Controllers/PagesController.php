<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except'=>'contact']);
    }


    public function contact()
    {
    	return view('pages.contact');
    }

    public function about()
    {
    	return view('pages.about');
    }
    public function panel()
    {
    	return view ('panel');
    }
    public function zamow()
    {
        return view ('zamowienie');
    }
}
