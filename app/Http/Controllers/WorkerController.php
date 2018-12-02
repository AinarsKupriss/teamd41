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

class WorkerController extends Controller
{
    public function getWorkerHome()
    {
        if(Auth::user()->status == 2 ){
            $workers = DB::table('users')->where('status' , '=', 2)->get();
            return view('worker.dash')->with('workers', $workers);
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



            Session::flash('message-worker-deleted', "Darbinieks veiksmīgi dzēsts!");
            return redirect('/worker');
        }else{
            redirect('/');
        }
    }

}
