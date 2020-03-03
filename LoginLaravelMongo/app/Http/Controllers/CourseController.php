<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Mongodb\Eloquent\Model;
use App\Course;

class CourseController extends Controller
{
    
        //DFUNC this is a function to save data in the collection (INSERT) a data with POST method
        public function insert(Request $request){
            $data=$request;
            Course::create([
                'topic'=>$data['topic'],
                'description'=>$data['description'],
                'url'=>$data['url'],
             ]);
            return view('/course');
        }
        //DFUNC 

        public function query(Request $request){
            //NOTE query to call all from the table course
            $myQuery=Course::all();
            return $myQuery;
        }

}
