<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ticket;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only'=>['panel','zamow']]);
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
     public function historia()
    {
        $tickets = ticket::latest()->get();
        return view ('historia')->with('tickets',$tickets);
    }
    public function store()
    {
        $input = Request::all();
        ticket::create($input);
        return view('panel');
    }
}
