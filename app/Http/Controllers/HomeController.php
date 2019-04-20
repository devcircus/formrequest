<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\IndexRequest;

class HomeController extends Controller
{
	/**
     * Show the form for change the password.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getChangePassword()
    {
        return view('change-password');
    }

    /**
     * change the password.
     *
     * @param  App\Http\Requests\ChangePasswordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function putChangePassword(IndexRequest $request)
    {
        dd($request->validate());
    }
}
