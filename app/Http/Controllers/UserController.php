<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function getUserHome()
    {
        if(Auth::check()){
            $authID = Auth::id();
            $user = User::with('customProjects')->find($authID);
            $projects = DB::table('orders')
                ->select('projects.id', 'projects.name','projects.desc','projects.image','projects.price', 'projects.status AS projstatus','users.firstname','users.lastname','orders.status')
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
        $user = User::find($authID);
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
        if(Auth::check($request)){
            $authID = Auth::id();
            $user = User::find($authID);
            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->email = $request->input('email');
            $user->save();

            Session::flash('message-profile-edited', "Profils veiksmīgi rediģēts!");

        }
        return redirect()->action('UserController@getUserHome');
    }

    public function addCustomProject(Request $request){
        if(Auth::check()) {
            $authID = Auth::id();

            $project = new Project();
            $project->name = $request->input('name');
            $project->desc = $request->input('desc');

            $project->price = $request->input('price');
            $project->status = '2';

            if ($request->hasFile('image')) {
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extensions = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extensions;
                $path = $request->file('image')->storeAs('public/stored_projects', $fileNameToStore);

                $project->image = $fileNameToStore;
            }

            $project->save();


            $user_order = new Order();
            $user_order->userid = $authID;
            $user_order->projectid = $project->id;
            $user_order->status = '3';

            $user_order->save();

            Session::flash('message-custom-project-added', "Projekts veiksmīgi pievienots!");
        }
        return redirect()->action('UserController@getUserHome');
    }

    public function geteditCustomProjectPage($id){
        if(Auth::check()) {
            $project = Project::find($id);
            return view('user.editcustomproject')->with('project', $project);
        }else{
            return redirect('/');
        }
    }

    public function editCustomProject(Request $request, $id){
        if(Auth::check()) {
            $project = Project::where('id', $id)->first();

            if($project->status == 2) {

                $project->name = $request->input('name');
                $project->desc = $request->input('desc');
                $project->price = $request->input('price');

                if ($request->hasFile('image')) {
                    $filenameWithExt = $request->file('image')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extensions = $request->file('image')->getClientOriginalExtension();
                    $fileNameToStore = $filename . '_' . time() . '.' . $extensions;
                    $path = $request->file('image')->storeAs('public/stored_projects', $fileNameToStore);

                    $project->image = $fileNameToStore;
                }

                $project->save();
                Session::flash('message-custom-project-edit', "Projekts veiksmīgi rediģēts!");
            }
        }

        return redirect()->action('UserController@getUserHome');
    }

//    public function deleteCustomProject($id){
//        $project = Project::find($id);
//
//        Storage::delete('public/stored_projects/' . $project->image);
//        $project->delete();
//        return redirect()->action('UserController@getUserHome');
//    }

    public function addProjectToOrder($projectID){
        if(Auth::check()) {
            $authID = Auth::id();

            $user_order = new Order();
            $user_order->userid = $authID;
            $user_order->projectid = $projectID;
            $user_order->status = '3';

            $user_order->save();

            Session::flash('message-project-added', "Projekts veiksmīgi pievienots!");
            return redirect()->back();
        }
    }

    public function getIndex(){
        $projects = DB::table('projects')->where('status', '=', 1)->get();

        return view('welcome')->with('projects', $projects);
    }
}

