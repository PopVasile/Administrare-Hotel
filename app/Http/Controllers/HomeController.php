<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home' ,['value' => 'Dashboard']);
    }

    public function loadPage($value){

        if($value=="Dashboard")
        {
            return view('home', ['value' => $value]);
        }
        if($value=="RoomsManager")
        {
            return view('home', ['value' => $value]);
        }
        if($value=="GuestManager")
        {
            return view('home', ['value' => $value]);
        }
        if($value=="FrontOffice")
        {
            return view('home', ['value' => $value]);
        }
        if($value=="Help")
        {
            return view('home', ['value' => $value]);
        }
        if($value=="HouseKeeping")
        {
            return view('home', ['value' => $value]);
        }
        if($value=="NightAuditor")
        {
            return view('home', ['value' => $value]);
        }
        if($value=="PointOfSale")
        {
            return view('home', ['value' => $value]);
        }
        if($value=="PriceManager")
        {
            return view('home', ['value' => $value]);
        }
        if($value=="ReserManager")
        {
            return view('home', ['value' => $value]);
        }
        if($value=="Security")
        {
            return view('home', ['value' => $value]);
        }
        if($value=="Setting")
        {
            return view('home', ['value' => $value]);
        }

    }
}
