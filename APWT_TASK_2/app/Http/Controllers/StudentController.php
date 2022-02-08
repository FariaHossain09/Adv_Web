<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentcreate()
    {
        return view('pages.student.studentcreate') ;
    }
   
    public function login()
        {   return view('pages.student.login') ;
            
        }

    public function logindone(Request $req)
        {   
            //return view('pages.student.login') ;
            $validate= $req ->validate([
                'id' => 'required',
                'password' => 'required'
            ]);
            return redirect()->route('home');
              
        }
    

    public function studentcreatesubmitted(Request $request) //data submit howyar por request object akhane pabo
    {
        //validation
        $validate= $request ->validate([
            'name'=>'required|min:5|string',
            'id'=>'required|string|min:1',
            'password'=>'required|string|min:4',
            'dob'=>'required|string|min:4',
            'email'=>'required|string|min:1',
            'phone'=>'required|string|min:1'
        ]);
        return "ok" ;
    }
//],
//[
    //'name.required'=>'Please put your name',
    //'name.min'=>'Name must be greater than 5 charcters'
//]
//);
//return "ok";
//}

    public function studentlist()
    {
        $student =array();

        for($i=0; $i<10;$i++)
        {
            $student =array(
                "name"=>"Students ". ($i+1),
                "id" => "00". ($i+1),
                "dob" => "11-111-11"
            );
            $students[] =(object)$student; //type casting make object
        }
        return view('pages.student.list') -> with ("students",$students);
    
    }
}
