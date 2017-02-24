<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Group;

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
      $Groups = Group::all();

      // foreach ($flights as $flight) {
      //     echo $flight->name;
      // }
        return view('home')->with('Groups', $Groups);
    }
}
