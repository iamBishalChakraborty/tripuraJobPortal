<?php

namespace App\Http\Controllers;

use App\District;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        if (Auth::user()->dob){
            return view('dashboard.dashboard');
        }else{
            ;
            return view('dashboard.user_profile')->with('info','Please fill this form to proceed');
        }

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(User $user)
    {
        //
    }


    public function edit(User $user)
    {
        //
    }


    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }

    public function userProfile()
    {

        return view('dashboard.user_profile');
    }
}
