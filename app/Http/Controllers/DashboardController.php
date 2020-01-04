<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    //

    public function _construct()
    {
        // $this->middleware('auth');
    }

    public function dashboard()
    {
        //Auth::logout();
        return "home";
    }
}
