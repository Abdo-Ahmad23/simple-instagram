<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('home');
    }
    public function editprofile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('auth.edit', compact('user'));
    }
    function updateprofile(Request $request)
    {
        dd($request->all());
    }
}