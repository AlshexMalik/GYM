<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\courserequist;
use Illuminate\Http\Request;
use App\Models\exercises;
use App\Models\cartexercises;
use App\Models\usercourse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Carbon;  
use Session;
 

class agentcontroller extends Controller
{
    public function profile(){
        $user = auth::user();
        $id = $user->id;
        #$requist = DB::select('SELECT * FROM `courserequist` WHERE `coach`= '.$id.' AND`statuse`="active" ');
        $requist = DB::select('SELECT c.id AS cid, userid, u.firstname, u.midlename , u.photo , u.id as uid  from (select * from users) as u,
         courserequist as c where c.userid = u.id AND `statuse`="active" and `coach`='.$id.'; ');
        #$userid =$requist->userid;
        #$userrequist = DB::select('select * from users where id = ?', [$userid]);
        return view('agent.profile' , compact('user'),compact('requist'));
    }

    public function updateprofile(){
        $user = auth::user();
        return view('agent.update' , compact('user'));
    }

    public function agentupdateprofile(request $request){
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
        return view('agent.profile' , compact('user'));
    }

    public function updatepass(){
        $user = auth::user();
        return view('agent.password' , compact('user'));
    }

    public function agentpasswordu(request $request){
        $user = auth::user();
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required'
            
        ]);
        
        if(!Hash::check($request->old_password, auth::user()->password)){
            return view('agent.password',compact('user'));
        }
        if($request->new_password == $request->re_new){
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return view('agent.profile',compact('user'));
        }
        return view('agent.password',compact('user'));
    }


    public function LogOut(Request $request){

        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect("/");
    }


    public function seerequist($rid , $uid){
         
            $_SESSION["rid"] = $rid;
        
        $user = auth::user();
        $id = $user->id;
        $requist = DB::select('SELECT * , u.id as uid , u.hight as uhight , u.wieght as uwieght ,
        c.id  as cccid, c.hight as chight , c.wieght as cwieght from 
        (select * from users) as u, courserequist as c 
        where c.id ='.$rid.' AND c.userid = u.id AND `statuse`="active" and `coach`='.$id.';');
        if(!$uid == null){
            Session::put('uid', $uid);
            $uuid = session('uid');;
        }
        $exercises = exercises::all();
        $cartexercises = cartexercises::where('user_id',session('uid'))->get();
        return view('agent.createcourse' , compact('requist'),compact('exercises'), compact('uuid'));
    }

    public function senttocart(request $request){
        $add = new cartexercises;
        $add->user_id = $request->user_id;
        $add->exercise_id = $request->exercis_id;
        $add->coach_id = $request->couch_id;
        $add->requist_id = $request->cccid;
        $add->repetion = $request->repetion;
        $add->day = "nullo";
        $add->save();
        $rid =$request->requist_id;
        return redirect('show/requist/course/'.$rid.'/'.session('uid'));
    }

    public function seeusercart($uid , $cid){
        $data = DB::table('users as u')
        ->join('cartexercises as c', 'u.id', '=', 'c.user_id')
        ->join('exercises as e', 'c.exercise_id', '=', 'e.id')
        ->join('courserequist', function($join) {
            $join->on('c.requist_id', '=', 'courserequist.id')
                 ->where('courserequist.statuse', 'active');
                })
        ->where('c.user_id', '=', $uid) // Add the condition here   
        ->select('u.*', 'c.*', 'u.id as uid', 'c.coach_id as ccid', 'c.id as cid', 'e.name AS ename', 'e.*', 'e.photo AS ephoto', 'e.photo AS ephoto', 'e.id AS eid', 'e.photo AS eprimary_muscle')
        ->orderBy('e.primary_muscle', 'asc')
        ->get(); 
        $ccid = DB::table('users as u')
            ->join('cartexercises as c', 'u.id', '=', 'c.user_id')
            ->join('exercises as e', 'c.exercise_id', '=', 'e.id')
            ->select('u.*', 'c.*','u.id as uid','c.coach_id as ccid','c.id as cid', 'e.name AS ename' ,'e.*','e.photo AS ephoto',  'e.photo AS ephoto','e.id AS eid' ,'e.photo AS eprimary_muscle')
            ->orderBy('e.primary_muscle', 'asc')  
            ->first();  
        $requist =User::where('id', $uid)->first();
        
        return view('agent.cartexercesesuser',compact('requist','data'),compact('ccid'));
    }

    public static function check($uid , $eid , $cid){
        $data = cartexercises
        ::where('user_id', '=', $uid)
        ->where('exercise_id', '=', $eid)
        ->where('coach_id', '=', $cid)->count();
        if ($data > 0) {
            $data = 1;
        } else {
            $data = 0;
        }
        return $data;
        
    }

    public function removetocart($uid , $eid , $cid , $rid){
        
        cartexercises::where('user_id', '=', $uid)
         ->where('exercise_id', '=', $eid)
         ->where('coach_id', '=', $cid)
         ->delete();
        return redirect('show/requist/course/'.$rid.'/'.session('uid'));
    }

    public function updatecartuser(request $request){
        $data = cartexercises::find($request->cid); 
        $data->day = $request->day;
        $data->save();
        $cid = $request->cid;
        $uid = $request->uid;

        return redirect('/see/user/cart/'.$uid.'/'.$cid);

    }

    public function done($uid,$ccid){
        $results2 = exercises::select('exercises.*', 'exercises.name as ename', 'exercises.primary_muscle as primary_muscle', 'cartexercises.coach_id as ccid', 'users.id as uid', 'cartexercises.repetion as repetion', 'cartexercises.day as day')
            ->join('cartexercises', 'cartexercises.exercise_id', '=', 'exercises.id')
            ->join('users', 'cartexercises.user_id', '=', 'users.id')
            ->where('cartexercises.user_id', $uid)
            ->where('cartexercises.coach_id', $ccid)
            ->get();
   
        $date =now()->format('Y-m-d');

        
        DB::update('update usercourse set state_es = "deactive" where user_id = ? and coch_id=?', [$uid , $ccid]);
        DB::update('update courserequist set statuse = "deactive" where userid = ?', [$uid]);
        DB::insert('insert into usercourse (user_id , coch_id,date ,day) values (?,?, ? ,?)'
        ,[$uid, $ccid , $date,"sorknow"]);
        return $this->profile();
    }

  
}
