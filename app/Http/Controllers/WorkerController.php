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
        if (Auth::user()->status == 2 || Auth::user()->status == 3) {
            $workers = DB::table('users')->where('status', '=', 2)->get();
            $projects = DB::table('projects')->where('status', '=', 1)->orWhere('status', '=', 3)->get();
            $orders = DB::table('orders')
                ->select('orders.id','projects.name','projects.desc','projects.image','projects.price','users.firstname','users.lastname')
                ->join('users', 'users.id', '=', 'orders.userid')
                ->join('projects', 'projects.id', '=', 'orders.projectid')
                ->where('orders.status', '=', '3')
                ->get();
            return view('worker.dash')
                ->with('workers', $workers)
                ->with('projects', $projects)
                ->with('orders', $orders);
        } else {
            redirect('/');
        }
    }

    public function createWorker()
    {
        if (Auth::user()->status == 2 || Auth::user()->status == 3) {

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

            if ($validator->fails()) {
                return redirect('/worker')
                    ->withErrors($validator)
                    ->withInput();
            }

            //Creates shelter
            $worker = new User;
            $worker->firstname = $data['firstname'];
            $worker->lastname = $data['lastname'];
            $worker->email = $data['email'];
            $worker->status = 2;
            $worker->password = bcrypt($data['password']);


            //Saves worker
            $worker->save();

            //Paziņojums par veikto darbību
            Session::flash('message-worker-added', "Darbinieks veiksmīgi pievienots!");
            return redirect()->back();

        } else {
            redirect('/');
        }
    }

    public function deleteWorker($id)
    {
        if (Auth::user()->status == 2 || Auth::user()->status == 3) {

            DB::table('users')->where('id', '=', $id)->delete();

            Session::flash('message-worker-deleted', "Darbinieks veiksmīgi dzēsts!");
            return redirect('/worker');
        } else {
            redirect('/');
        }
    }

    public function getEditPage($id)
    {
        if (Auth::user()->status == 2 || Auth::user()->status == 3) {
            $worker = DB::table('users')->where('id', '=', $id)->get();
            return view('worker.edit')->with('worker', $worker[0]);
        } else {
            redirect('/worker');
        }
    }

    public function editWorker($id)
    {
        if (Auth::user()->status == 2 || Auth::user()->status == 3) {

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

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }


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
        } else {
            redirect('/');
        }
    }

    public function addProject(Request $request)
    {
        if (Auth::user()->status == 2 || Auth::user()->status == 3) {

            //Input
            $data = Input::except(array('_token'));

            //Validation rules
            $rule = array(
                'name' => 'required',
                'desc' => 'required',
                'price' => 'required|numeric|min:0',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            );

            //Validation messages
            $messages = array(
                'required' => 'Netika aizpildīti visi lauki!',
            );

            //Validates
            $validator = Validator::make($data, $rule, $messages);

            if ($validator->fails()) {
                return redirect('/worker')
                    ->withErrors($validator)
                    ->withInput();
            }

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
                'public/stored_projects', $fileid[0]->id . '.jpg'
            );

            //Sets correct filename when saving database
            DB::table('projects')
                ->where('id', $fileid[0]->id)
                ->update(['image' => 'stored_projects/' . $fileid[0]->id . '.jpg']);


            //Paziņojums par veikto darbību
            Session::flash('message-project-added', "Projekts veiksmīgi pievienots!");
            return redirect()->back();

        } else {
            redirect('/');
        }
    }

    public function getEditProjectPage($id)
    {
        if (Auth::user()->status == 2 || Auth::user()->status == 3) {
            //Gets the project data
            $project = DB::table('projects')->where('id', '=', $id)->first();

            //Returns view with data
            return view('worker.projects.edit')->with('project', $project);
        } else {
            return redirect('/');
        }
    }

    public function editProject($id, Request $request)
    {
        if (Auth::user()->status == 2 || Auth::user()->status == 3) {

            //Input
            $data = Input::except(array('_token'));

            //Validation rules
            $rule = array(
                'name' => 'required',
                'desc' => 'required',
                'price' => 'required|numeric|min:0',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            );

            //Validation messages
            $messages = array(
                'required' => 'Netika aizpildīti visi lauki!',
            );

            //Validates
            $validator = Validator::make($data, $rule, $messages);

            //Updates data
            DB::table('projects')
                ->where('id', $id)
                ->update([
                    'name' => $data['name'],
                    'desc' => $data['desc'],
                    'price' => $data['price'],
                ]);

            //File managment
            if ($request->hasFile('image')) {

                //Removes old file
                Storage::delete('public/stored_projects/' . $id . '.jpg');

                //Adds new file
                $file = $request->file('image')->storeAs(
                    'public/stored_projects', $id . '.jpg'
                );
            }


            //Paziņojums par veikto darbību
            Session::flash('message-project-edited', "Projekts veiksmīgi rediģēts!");
            return redirect('/worker');

        } else {
            redirect('/');
        }
    }
    
    public function disableProject($id){
        if (Auth::user()->status == 2 || Auth::user()->status == 3) {
            //Updates the record in DB
            DB::table('projects')
                ->where('id', '=', $id)
                ->update([
                    'status' => 3
                ]);

            //Goes back
            Session::flash('message-project-disabled', "Projekts veiksmīgi atslēgts!");

        }

        return redirect('/worker');
    }
    
    public function enableProject($id){
        if (Auth::user()->status == 2 || Auth::user()->status == 3) {
            //Updates the record in DB
            DB::table('projects')
                ->where('id', '=', $id)
                ->update([
                    'status' => 1
                ]);

            //Goes back
            Session::flash('message-project-enabled', "Projekts veiksmīgi ieslēgts!");

        }

        return redirect('/worker');
    }

    public function removeProject($id)
    {
        if (Auth::user()->status == 2 || Auth::user()->status == 3) {
            //Deletes DB records
            DB::table('projects')->where('id', '=', $id)->delete();
            DB::table('orders')->where('projectid', '=', $id)->delete();

            //Removes saved file
            Storage::delete('public/stored_projects/' . $id . '.jpg');

            //Goes back
            Session::flash('message-project-deleted', "Projekts veiksmīgi dzēsts!");

        }

        return redirect('/worker');
    }

    public function acceptOrder($id)
    {
        if (Auth::user()->status == 2 || Auth::user()->status == 3) {
            //Updates the record in DB
            DB::table('orders')
                ->where('id', '=', $id)
                ->update([
                    'status' => 1
                ]);

            //Goes back
            Session::flash('message-order-accepted', "Pasūtījums veiksmīgi pieņemts!");

        }

        return redirect('/worker');
    }

    public function denyOrder($id)
    {
        if (Auth::user()->status == 2 || Auth::user()->status == 3) {
            //Updates the record in DB
            DB::table('orders')
                ->where('id', '=', $id)
                ->update([
                    'status' => 2
                ]);

            //Goes back
            Session::flash('message-order-denied', "Pasūtījums veiksmīgi noliegts!");

        }

        return redirect('/worker');
    }
}
