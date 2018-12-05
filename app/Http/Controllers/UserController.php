<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function getUserHome()
    {
        if(Auth::user()->status == 1 ){
            $authID = Auth::id();
            $user = User::where('id', $authID)->with('customProjects')->first();
            $projects = Project::all();
            return view('user.dash')->with(['user' => $user, 'projects' => $projects]);
        }else{
            redirect('/');
        }
    }

    public function getEditPage(){
        $authID = Auth::id();
        $user = User::find($authID)->first();
        return view('user.editprofile')->with('user', $user);
    }

    public function getCustomProjectPage(){
        if(Auth::user()->status == 1 ){
            return view('user.addcustomproject');
        }else{
            redirect('/');
        }
    }

    public function getProjectPage(){
        if(Auth::user()->status == 1 ){
            $projects = Project::all();
            return view('user.projects')->with('projects', $projects);
        }else{
            redirect('/');
        }
    }

    public function editUser(Request $request){
        $authID = Auth::id();
        $user = User::find($authID);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->save();

//            Session::flash('message-worker-added', "Darbinieks veiksmīgi rediģēts!");
        return redirect()->back();
    }

    public function addCustomProject(Request $request){
        $authID = Auth::id();

        $project = new Project();
        $project->name =  $request->input('name');
        $project->desc =  $request->input('desc');
        $project->status = '2';

        $project->save();


        $user_order = new Order();
        $user_order->userid = $authID;
        $user_order->projectid = $project->id;
        $user_order->status = '3';

        $user_order->save();

        return view('user.dash');
    }

    public function addProjectToOrder($projectID){
        $authID = Auth::id();

        $user_order = new Order();
        $user_order->userid = $authID;
        $user_order->projectid = $projectID;
        $user_order->status = '3';

        $user_order->save();

        return redirect()->back();
    }
}
