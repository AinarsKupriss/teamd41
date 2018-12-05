<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function getUserHome()
    {
        if(Auth::check()){
            $authID = Auth::id();
            $user = User::where('id', $authID)->with('customProjects')->first();
            $projects = DB::table('orders')
                ->select('orders.id','projects.name','projects.desc','projects.image','projects.price','users.firstname','users.lastname','orders.status')
                ->join('users', 'users.id', '=', 'orders.userid')
                ->join('projects', 'projects.id', '=', 'orders.projectid')
                ->where('orders.userid', '=', $authID)
                ->get();

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
        if(Auth::check()){
            return view('user.addcustomproject');
        }else{
            redirect('/');
        }
    }

    public function getOrderPage(){
        if(Auth::check()){
            //Gets data from DB
            $projects = DB::table('projects')->where('status' ,'=', 1)->get();

            return view('user.orders')->with('projects', $projects);
        }else{
            redirect('/');
        }
    }

    public function getProjectPage(){
        if(Auth::check()){
            $projects = Project::where('status', '1')->get();
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

        Session::flash('message-order-added', "Pasūtījums izveidots! Lūdzu apmeklējat savu profilu, lai redzetu pasūtījuma stāvokli.");
        return redirect()->back();
    }
}

