<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;


class QuestionController extends Controller
{
    //

       public function add(Request $req) {
            $validate=$req->validate([
            'question' => 'required',
            'opa' => 'required',
            'opb' => 'required',
            'opc' => 'required',
            'opd' => 'required',
            'ans' => 'required',
        ]);
        $q=new question();
        $q->question=$req->question;
        $q->A=$req->opa;
        $q->B=$req->opb;
        $q->C=$req->opc;
        $q->D=$req->opd;
        $q->ans=$req->ans;

        $q->save();
        session()->put('successMessage',"Question successfully added");
        // Session::put('successMessage',"Question successfully added");
        return redirect(route('questionPaper'));

    }

    public function question(){
       
        // $teacher_phone = session()->get('user');
        // //return $teacher_phone;
        // $c= Teacher::where('name', $teacher_phone)->first();
        // //return $c;
        // //
        return view('questionPaper');
    
    }


    public function questionss(){
       
        // $teacher_phone = session()->get('user');
        // //return $teacher_phone;
        // $c= Teacher::where('name', $teacher_phone)->first();
        // //return $c;
        // //
        return view('questionss');
    
    }


    
public function questionShow(){
       
    // $teacher_phone = session()->get('user');
    // //return $teacher_phone;
    // $c= Teacher::where('name', $teacher_phone)->first();
    // //return $c;
    // //

    // $students = Student :: all();        //array();

    //     return view('pages.student.list') -> with ("students",$students);
    $qs = Question::all();
        return view('questionPaper')->with(['questionPaper'=>$qs]);
    //return view('questionPaper');

}


}




