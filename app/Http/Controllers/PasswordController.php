<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Password;
use Auth;
use Crypt;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $Passwords = Password::All();
      // foreach ($Passwords as $password) {
      //   echo $password->name . ": " . $password->group_id . ":" . $password->password . "</br>";
      // }
      // print_r($Passwords);
      // echo Crypt::decryptString($Passwords->password);
      // die();

      return view('password.index', ['passwords' => $Passwords]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $groups = Auth::user()->groups;
      if($groups->isEmpty()) {
        return redirect('/group/new')->with('status', 'No groups found. Please create one below');
      }
      return view('password.create', ['groups' => $groups]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // echo $request->input('group_select');
      // die();
      $password = new Password;
      $password->name     = $request->input('name');
      //$password->password = Crypt::encryptString($request->input('password'));
      $password->password = $request->input('password');
      $password->group_id = $request->input('group_select');
      //Auth::user()->groups()->attach($group);
      $password->save();

      return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Passwords = Password::All();
        return view('password.index', ['passwords' => $Passwords]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
