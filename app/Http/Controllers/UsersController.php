<?php

namespace App\Http\Controllers;

use App\UsersModel;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('user.customer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UsersModel  $usersModel
     * @return \Illuminate\Http\Response
     */
    public function show(UsersModel $usersModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UsersModel  $usersModel
     * @return \Illuminate\Http\Response
     */
    public function edit(UsersModel $usersModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UsersModel  $usersModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersModel $usersModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UsersModel  $usersModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersModel $usersModel)
    {
        //
    }
}
