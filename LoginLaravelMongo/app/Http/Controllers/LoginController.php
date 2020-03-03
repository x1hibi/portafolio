<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Mongodb\Eloquent\Model;
use App\User;

class loginController extends Controller
{
    
    public function validation(Request $request)
    {
        //NOTE with this we have the username inputed from user
        $data=$request;
        $username=$data['userName'];
        //dd($username);
        //NOTE we made a query to see if the user exist
        //dd($username);
        $myQuery=User::where('userName',$username)->value('userName');
        //dd($myQuery);
        // $answer;
        // if ($myQuery == ""){
        //     global $answer;
        //     $value="user is not in database";
        //     $answer=redirect()->back();
        // }elseif($myQuery == $username){
        //     global $answer;
        //     $answer=redirect('/');
        // }
        //$request->session->put('user',$username);
        //$name=$request->session->get('user');
        //NOTE the both are equals
        //return view('home',compact('username'));
        //return view('home')->with('user',$username);
        return view('home',compact('username'));
        //return $answer;
    }

}
