<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Mongodb\Eloquent\Model;
use App\Http\Controllers\Redirect;
use App\User;

class UserController extends Controller
{
    public function querytest(){
        //NOTE this is a simple query usign the table TestModel
        $myQuery=TestModel::where('userName','x1hibi')->value('userName');

         //NOTE this query return all the table
         $allTable=TestModel::whereAll();

        //NOTE with this notation you have to use the varible with php tags
        //return view('testQuery',compact('myQuery'));
        //NOTE with this notation you can use doble curly parents notation
        return view('testQuery')->with('test',$myQuery);
    }

        //DFUNC this is a function to save data in the collection (INSERT) a data with POST method
        public function insert(Request $request){
            $data=$request;
            //$username=$data['userName'];
            //dd($data['userName']);
            User::create([
                'userName'=>$data['userName'],
                'userEmail'=>$data['userEmail'],
                'userPassword'=>bcrypt('empty'),
                'userPrivilege'=>'read',
             ]);
            return view('home');
    
        }
        //DFUNC 

        public function query(Request $request){
            //$myQuery=TestModel::all();
            //NOTE query to call all the users names in the table
            dd($myQuery=TestModel::where('userName'));
            //return $myQuery;
        }
}
