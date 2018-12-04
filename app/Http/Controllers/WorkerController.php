<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Project;

class WorkerController extends Controller
{
    public function getWorkerHome()
    {
        if(Auth::user()->status == 2 ){
            $workers = DB::table('users')->where('status' , '=', 2)->get();
            $projects = DB::table('projects')->where('status' , '=', 1)->get();
            return view('worker.dash')->with('workers', $workers)->with('projects', $projects);
        }else{
            redirect('/');
        }
    }

    public function createWorker(){
        if(Auth::user()->status == 2 ){

            //Input
            $data = Input::except(array('_token'));

            //Validation rules
            $rule = array(
                'firstname' => 'required',
                'lastname' => 'required',
                'password' => 'required',
                'email' => 'required'
            );

            //Validation messages
            $messages = array(
                'required' => 'Netika aizpildīti visi lauki!',
            );

            //Validates
            $validator = Validator::make($data, $rule, $messages);

            //Creates shelter
            $worker = new User;
            $worker->firstname = $data['firstname'];
            $worker->lastname = $data['lastname'];
            $worker->email = $data['email'];
            $worker->status = 2;
            $worker->password = bcrypt($data['password']);


            //Saves worker
            $worker->save();

//            //Sets name for file before storing it
//            $fileid = DB::table('shelters')->where([
//                ['Name', '=', $data['Name']],
//                ['Street', '=', $data['Street']],
//                ['Street_nr', '=', $data['Street_nr']],
//            ])->get();
//
//            //Saves file
//            $file = $request->file('Picture')->storeAs(
//                'public/stored_shelters', $fileid[0]->ID. '.jpg'
//            );
//
//            //Sets correct filename when saving database
//            DB::table('shelters')
//                ->where('id', $fileid[0]->ID)
//                ->update(['Picture' => 'stored_shelters/' . $fileid[0]->ID . '.jpg']);


            //Paziņojums par veikto darbību
            Session::flash('message-worker-added', "Darbinieks veiksmīgi pievienots!");
            return redirect()->back();

        }else{
            redirect('/');
        }
    }

    public function deleteWorker($id){
        if(Auth::user()->status == 2 ){

            DB::table('users')->where('id', '=', $id)->delete();

            Session::flash('message-worker-deleted', "Darbinieks veiksmīgi dzēsts!");
            return redirect('/worker');
        }else{
            redirect('/');
        }
    }

    public function getEditPage($id){
        if(Auth::user()->status == 2){
            $worker = DB::table('users')->where('id', '=', $id)->get();
            return view('worker.edit')->with('worker', $worker[0]);
        }else{
            redirect('/worker');
        }
    }

    public function editWorker($id){
        if(Auth::user()->status == 2 ){

            //Input
            $data = Input::except(array('_token'));

            //Validation rules
            $rule = array(
                'firstname' => 'required',
                'lastname' => 'required',
                'password' => 'required',
                'email' => 'required'
            );

            //Validation messages
            $messages = array(
                'required' => 'Netika aizpildīti visi lauki!',
            );

            //Validates
            $validator = Validator::make($data, $rule, $messages);


            //Saving new data
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'firstname' => $data["firstname"],
                    'lastname' => $data["lastname"],
                    'password' => bcrypt($data["firstname"]),
                    'email' => $data["email"]
                ]);

            Session::flash('message-worker-edited', "Darbinieks veiksmīgi rediģēts!");
            return redirect('/worker');
        }else{
            redirect('/');
        }
    }

    public function addProject(Request $request){
        if(Auth::user()->status == 2 ){

            //Input
            $data = Input::except(array('_token'));

            //Validation rules
            $rule = array(
                'name' => 'required',
                'desc' => 'required',
                'price' => 'required',
                'iamge' => 'required'
            );

            //Validation messages
            $messages = array(
                'required' => 'Netika aizpildīti visi lauki!',
            );

            //Validates
            $validator = Validator::make($data, $rule, $messages);

            //Creates a new project
            $project = new Project;
            $project->name = $data["name"];
            $project->desc = $data["desc"];
            $project->image = $data["image"];
            $project->price = $data["price"];
            $project->status = '1';

            ///Saves the new project
            $project->save();


            //Sets name for file before storing it
            $fileid = DB::table('projects')->where([
                ['name', '=', $data['name']],
                ['desc', '=', $data['desc']],
                ['image', '=', $data['image']],
            ])->get();

            //Saves file
            $file = $request->file('image')->storeAs(
                'public/stored_projects', $fileid[0]->id. '.jpg'
            );

            //Sets correct filename when saving database
            DB::table('projects')
                ->where('id', $fileid[0]->id)
                ->update(['image' => 'stored_projects/' . $fileid[0]->id . '.jpg']);


            //Paziņojums par veikto darbību
            Session::flash('message-project-added', "Projekts veiksmīgi pievienots!");
            return redirect()->back();

        }else{
            redirect('/');
        }
    }
}
