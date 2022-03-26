<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\Registration;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use Illuminate\Http\Request;

class RegistrationController extends Controller
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
     * @param  \App\Http\Requests\StoreRegistrationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistrationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegistrationRequest  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegistrationRequest $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }

    public function teacherCreate(){
       // return view('pages.teacher.teacherCreate');
       return view('registration');
    }


    public function teacherCreateSubmitted(Request $request){

        $validate= $request ->validate([
            'name'=>'required|min:5|string',
            // 'id'=>'required|string|min:1',
            'password'=>'required|string|min:4',
            // 'dob'=>'required|string|min:4',
            // 'email'=>'required|string|min:1',
            'phone'=>'required|string|min:1'
        ]
    );


        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->phone = $request->phone;
        $teacher->password = $request->password;
        $teacher->teacherId = $request->teacherId;
        $teacher->save();
        return  $teacher;

    }





}
