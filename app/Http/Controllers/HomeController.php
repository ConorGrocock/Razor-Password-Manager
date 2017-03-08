<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Group;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //print_r(Auth::User()->groups); die;

      //$Groups = Group::all()->take(10);
      $Groups = Auth::User()->groups;

      return view('home')->with('Groups', $Groups);
    }
}
