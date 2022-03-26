<?php

namespace App\Http\Controllers;

use App\Models\QuestionPaper;
use App\Http\Requests\StoreQuestionPaperRequest;
use App\Http\Requests\UpdateQuestionPaperRequest;

class QuestionPaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionPaperRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionPaperRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionPaper  $questionPaper
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionPaper $questionPaper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionPaper  $questionPaper
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionPaper $questionPaper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionPaperRequest  $request
     * @param  \App\Models\QuestionPaper  $questionPaper
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionPaperRequest $request, QuestionPaper $questionPaper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionPaper  $questionPaper
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionPaper $questionPaper)
    {
        //
    }



    public function add(Request $req) {
        $validate=$req->validate([
        'question' => 'required',
        'opa' => 'required',
        'opb' => 'required',
        'opc' => 'required',
        'opd' => 'required',
        'ans' => 'required',
    ]);
    $q=new QuestionPaper();
    $q->question=$req->question;
    $q->A=$req->opa;
    $q->B=$req->opb;
    $q->C=$req->opc;
    $q->D=$req->opd;
    $q->ans=$req->ans;

    $q=save();
    Session::put('successMessage',"Question successfully added");
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



public function questionPaper(){
       
    // $teacher_phone = session()->get('user');
    // //return $teacher_phone;
    // $c= Teacher::where('name', $teacher_phone)->first();
    // //return $c;
    // //
    $qs = question::all();
        return view('questionPaper')->with(['questionPaper'=>$qs]);
    //return view('questionPaper');

}



}
