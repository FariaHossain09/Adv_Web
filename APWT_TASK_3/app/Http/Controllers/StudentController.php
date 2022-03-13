<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Admin;

class StudentController extends Controller
{
    public function __construct(){
        $this->middleware('ValidTeacher');
    }
    
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
        ]
    );

        //return "ok" ;
        $student =new Student();
        $student-> name=$request->name;
        $student-> student_id=$request->id;
        $student-> email=$request->email;
        $student->save();
        //return $student('pages.student.list'); // $name;
        return $student;
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
        $students = Student :: all();        //array();

                    /* for($i=0; $i<10;$i++)
                    {
                        $student =array(
                            "name"=>"Students ". ($i+1),
                            "id" => "00". ($i+1),
                            "dob" => "11-111-11"
                        );
                        $students[] =(object)$student; //type casting make object
                    } */
        return view('pages.student.list') -> with ("students",$students);
        //return $student;
    
    }

    public function studentedit(Request $request){
        //return $request->id;
        $student = Student::where('id', $request->id)->first();
        // return $student; 
         return view('pages.student.studentedit') -> with ("student",$student);
    }

    public function studentEditSubmitted(Request $request){
        //return $request->id;
        //$student =new Student();
        $student = Student::where('id', $request->id)->first();
        $student-> name=$request->name;
        $student-> student_id=$request->student_id;
        $student-> email=$request->email;
        $student->save();
        //return $student('pages.student.list'); // $name;
        //return $student;
        //$student = Student::where('id', $request->id)->first();
         //return $student; 
        // return view('pages.student.studentedit') -> with ("student",$student);
       // $students = Student :: all();
        //return view('pages.student.list') -> with ("students",$students);
        return redirect()->route('studentlist');
    }

    public function studentDelete(Request $request){
        $student = Student::where('id', $request->id)->first();
        $student->delete();
        
        return redirect()->route('studentlist');
    }
}
