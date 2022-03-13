<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use Illuminate\Http\Request;
use App\Models\Course;

class TeacherController extends Controller
{
    public function __construct(){
       // $this->middleware('ValidAdmin');
       //$this->middleware('ValidTeacher');
    }
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
     * @param  \App\Http\Requests\StoreTeacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherRequest  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }

    public function teacherCreate(){
        return view('pages.teacher.teacherCreate');
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
        $teacher->teacherId = $request->teacherId;
        $teacher->password = $request->password;
        $teacher->phone = $request->phone;
        $teacher->save();
        return  $teacher;

    }

    public function profile(){
       
        $teacher_id = session()->get('user');
        //return $teacher_phone;
        $c= Teacher::where('name', $teacher_id)->first();
        //return $c;
        //
        return view('pages.teacher.profile')-> with('c',$c);

    }

    public function profilesubmit(Request $request){
       
        $teacher_id = session()->get('user');
        //return $teacher_phone;
        $c= Teacher::where('name', $teacher_id)->first();
        //return $c;
        //
        $c->teacherId=$request->teacherId;
        $c->name=$request->name;
        $c->save();
        session()->put('user',$c->teacherId);
        return redirect(route('home'));

    }


    public function teacherList(){
        $teachers = Teacher::all();
        return view('pages.teacher.teacherList')->with('teachers', $teachers);
    }

    public function teacherCourses(Request $request){

        //$t = Teacher::where('id',1)->first();
        $t = Teacher::where('id',$request->id)->first();
        // return $t->id;
        //hasmany
        // return $t->courses;

        //eloquent
        return $t->assignedCourses();
    }

}
