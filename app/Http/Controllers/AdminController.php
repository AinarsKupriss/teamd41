<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getAdminHome()
    {
        if(Auth::user()->status == 3 ){
            $users = DB::table('users')->get();
            return view('admin.dash')->with('users', $users);
        }else{
            redirect('/');
        }
    }

    public function updateUser(Request $request, $id)
    {
        if(Auth::user()->status == 3 ){
            $user = User::find($id);
            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->email = $request->input('email');
            $user->phone_number = $request->input('phone_number');
            $user->status = $request->input('status');
            $user->save();

            Session::flash('message-worker-edited', "Darbinieks veiksmīgi rediģēts!");
            return redirect()->back();
        }else{
            redirect('/');
        }
    }

}
