<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\exercises;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function profile(){
        return view('home');
    }



    public function LogOut(Request $request){

        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect("/");
    }


    public function exercises(){
        $exercises = exercises::all();
        return view('exercises',compact('exercises'));
    }

    public function addexercises(){
        $a =exercises::all();
        return view('AddExercises',compact('a'));
    }
    public function add_exercises(request $request){
        $data =new exercises; 
        $data->name = $request->name;
        if($request->photo){
            $file = $request->photo;
            $filename = date('Ymd').$file->getClientOriginalName();
            @unlink(public_path('upload/exercises/'.$data->photo));
            $file->move(public_path('upload\exercises'),$filename);
            $data['photo'] = $filename;
        }
        $data->details = $request->details;
        $data->primary_muscle = $request->primary;
        $data->assist_muscle_1  = $request->assist1;
        $data->assist_muscle_2  = $request->assist2;
        $data->save();
        return redirect('add/Exercises');
    }
}
