<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Group;
use Auth;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $groups = Group::all();
      // foreach ($Passwords as $password) {
      //   echo $password->name . ": " . $password->group_id . ":" . $password->password . "</br>";
      // }

      return view('group.index', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     print_r($request);
    //     die();

        $group = new Group;
        $group->name = $request->input('name');
        $group->group_key = $request->input('group_key');
        //Auth::user()->groups()->attach($group);
        $group->save();

        $group->users()->attach(Auth::user());

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
        return view('group.show', ['group' => Group::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('group.edit', ['group' => Group::find($id)]);
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
        $group = Group::find($id);
        $group->name = $request->input('name');
        $group->save();
        return redirect('/group/show/' . $group->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Group::destroy($id);
        return redirect('/home');
    }
}
