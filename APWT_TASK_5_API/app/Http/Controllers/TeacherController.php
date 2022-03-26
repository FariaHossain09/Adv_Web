<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\laraveldb;

class TeacherController extends Controller
{
    public function __construct(){
       // $this->middleware('ValidAdmin');
      // $this->middleware('ValidTeacher');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $teachers = laraveldb::table('teachers')->select('id','name','phone')->get();
    
            return view('some-view')->with('teachers', $teachers);
        
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
            'phone'=>'required|string|min:1',
            'teacherId'=>'required|string|min:1'
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

    public function profile(){
       
        $teacher_phone = session()->get('user');
        //return $teacher_phone;
        $c= Teacher::where('name', $teacher_phone)->first();
        //return $c;
        //
        return view('pages.teacher.profile')-> with('c',$c);

    }

    public function profilesubmit(Request $request){
       
        $teacher_phone = session()->get('user');
        //return $teacher_phone;
        $c= Teacher::where('name', $teacher_phone)->first();
        //return $c;
        //
        $c->phone=$request->phone;
        $c->name=$request->name;
        $c->save();
        session()->put('user',$c->phone);
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

   
    public function APIList(){

     return Teacher::all();
     // return view('pages.teacher.teacherCreate');
    }

    

    public function APIPost(Request $req){
        $validate= $req ->validate([
            'name'=>'required|min:5|string',
            // 'id'=>'required|string|min:1',
            'password'=>'required|string|min:4',
            // 'dob'=>'required|string|min:4',
            // 'email'=>'required|string|min:1',
            'phone'=>'required|string|min:1',
            'teacherId'=>'required|string|min:1'
        ]
    );

        $tr = new Teacher();
       // $tr->id = $req->id;
        $tr->name = $req->name;
        $tr->phone = $req->phone;
        $tr->password = $req->password;
        $tr->teacherId = $req->teacherId;
        //$teacher->id = $req->created_at;
        //$teacher->id = $req->updated_at;
        $tr->save();
       // return  $req;
       return response() ->json (['message'=> 'Product Added successfully'], 200);
        
        // $teacher = new Teacher();
        // $teacher->name = $request->name;
        // $teacher->phone = $request->phone;
        // $teacher->password = $request->password;
        // $teacher->teacherId = $request->teacherId;
        // $teacher->save();
        // return  $teacher;
    //     $teacher=new Teacher();
    //     $teacher->id=$req->name;
    //     $teacher->id=$req->phone;
    //     $teacher->id=$req->teacherId;
    //    // return Teacher::all();
    //    $teacher->save();
    //    return $req;
      }
  

}
