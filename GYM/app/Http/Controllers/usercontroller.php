<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\courserequist;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class usercontroller extends Controller

{
    private $jsonData;
    public function profile(){
        $user = auth::user();
        $user_id = $user->id; 
        $results = DB::select('SELECT `exercises`.`name` AS name 
        , cartexercises.repetion as repetion 
        , exercises.primary_muscle as pri 
        , exercises.assist_muscle_1 as ass
        , cartexercises.day as day  
        ,exercises.photo as photo  FROM `cartexercises` 
        , `exercises`,`users`  
        WHERE users.id= '.$user_id.'
        and `user_id`= users.id  
        and `exercise_id` = exercises.id;');
        $user = auth::user();
        return view('user.profile' , compact( 'user' , 'results' ));
    }

    public function updateprofile(){
        $user = auth::user();
        return view('user.update' , compact('user'));
    }

    public function userupdateprofile(request $request){
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->firstname = $request->firstname;
        $user->midlename = $request->midlename;
        $user->address = $request->address;
        if($request->email){
            if($user->email == $request->email){
                
                }else{
                $exist = User::where('email','=',$request->email)->count();
                if($exist > 0){
                    return redirect()->back();
                }
                $user->email =$request->email;
            }
        }
        if($request->phone){
            if($user->phone == $request->phone){
                
                }else{
                $exist = User::where('phone','=',$request->phone)->count();
                if($exist > 0){
                    return redirect('user/update');
                }
                $user->phone =$request->phone;
            }
        }
        if($request->photo){
            $file = $request->photo;
            $filename = date('Ymd').$file->getClientOriginalName();
            @unlink(public_path('upload/userprofile/'.$user->photo));
            $file->move(public_path('upload\userprofile'),$filename);
            $user['photo'] = $filename;
        }
        $user->save();
        $user = auth::user();
        return view('user.profile' , compact('user'));
    }

    public function updatepass(){
        $user = auth::user();
        return view('user.password' , compact('user'));
    }

    public function userpasswordu(request $request){
        $user = auth::user();
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required'
            
        ]);
        
        if(!Hash::check($request->old_password, auth::user()->password)){
            return view('user.password',compact('user'));
        }
        if($request->new_password == $request->re_new){
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return view('user.profile',compact('user'));
        }
        return view('user.password',compact('user'));
    }

    public function requistcourse(){
        $agent = User::where('role',"agent")->get();
        $user = auth::user();
        return view('user.requistcourse',compact('user'),compact('agent'));
    }

    public function sendrequist(request $request){
        $data =new courserequist; 
        $userid = $request->userid;
        $cover_text = $request->text;
        $hight = $request->hight;
        $wieght = $request->wieght;
        $coach = $request->coach;
        $statuse = $request->statuse;
        if($request->up_front){
            $file = $request->up_front;
            $filename = date('Ymd').$file->getClientOriginalName();
            $file->move(public_path('upload\Rusercourseimg'),$filename);
            $up_front= $filename;
        }
        if($request->up_back){
            $file = $request->up_back;
            $filename = date('Ymd').$file->getClientOriginalName();
            $file->move(public_path('upload\Rusercourseimg'),$filename);
            $up_back = $filename;
        }
        if($request->up_left){
            $file = $request->up_left;
            $filename = date('Ymd').$file->getClientOriginalName();
            $file->move(public_path('upload\Rusercourseimg'),$filename);
            $up_left = $filename;
        }
        if($request->up_right){
            $file = $request->up_right;
            $filename = date('Ymd').$file->getClientOriginalName();
            $file->move(public_path('upload\Rusercourseimg'),$filename);
            $up_right = $filename;
        }
        if($request->test){
            $file = $request->test;
            $filename = date('Ymd').$file->getClientOriginalName();
            $file->move(public_path('upload\Rusercourseimg'),$filename);
            $do_front = $filename;
        }
        if($request->test1){
            $file = $request->test1;
            $filename = date('Ymd').$file->getClientOriginalName();
            $file->move(public_path('upload\Rusercourseimg'),$filename);
            $do_back = $filename;
        }
        #$save();
        $TimeInErbil = Carbon::now()->tz('Asia/Baghdad');
        DB::insert('insert into courserequist (userid, cover_text, hight, wieght, coach,
         statuse, up_front, up_back, up_left, up_right, do_front, do_back,`updated_at`,
         `created_at`) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [$userid, $cover_text,$hight,$wieght,
         $coach,$statuse,$up_front,$up_back,$up_left,$up_right,
         $do_front,$do_back,$TimeInErbil,$TimeInErbil]);
         
         
         $selectedData = DB::table('cartexercises')
         ->where('user_id', $userid)
         ->get();
        $this->jsonData = $selectedData->toJson();


         DB::table('cartexercises')
         ->where('user_id', $userid)
         ->delete();

        return redirect('/user/profile');
        
    }

    public function LogOut(Request $request){

        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect("/");
    }
}
