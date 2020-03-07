<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    //

    public function _construct()
    {
        // $this->middleware('auth');
    }

    public function dashboard()
    {

        return view("admin/dashboard/index");

    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/login');

    }
    public function admin_profile(){


        return view('admin/dashboard/adminProfile');
    }
    public function  profileUpdate(Request $request){

       
        $user = Auth::user();
        $user->name =$request['name'];
        $user->email = $request['email'];
        $user->save();
        if($request['password']!==""){
            if(!(Hash::check($request['password'],Auth::user()->password))){
                return redirect()->back()->with("not match passwords");
            }

            if(strcmp($request['password'],$request['new_password'])==0){
                return redirect()->back()->with('same password like previous');
            }
            $validation = $request->validate([
                'password' => 'required',
                'new_password' => 'required'
            ]);
            $user->password = Hash::make($request['new_password']);
            $user->save();
            return redirect()->back()->with('Password changed successfully.');
        }
        return back();
    }

}
