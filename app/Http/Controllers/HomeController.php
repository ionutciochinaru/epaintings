<?php

namespace App\Http\Controllers;

use App\Paintings;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $paintings = Paintings::all();

        return view('index',compact('paintings'));
    }
    public function paintings(){
        return view('pages.product');
    }
}
