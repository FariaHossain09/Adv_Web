<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use App\Models\Teacher;
use App\Models\Admin;
use Illuminate\Http\Request;


class LoginController extends Controller
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
     * @param  \App\Http\Requests\StoreLoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoginRequest  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoginRequest $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }

    public function Login(){
        return view('pages.login');
    }

    public function loginSubmit(Request $request){

        $validate= $request ->validate([
            'id'=>'required|string|min:1',
            'password'=>'required|string|min:4',
            // 'dob'=>'required|string|min:4',
            // 'email'=>'required|string|min:1',
            //'phone'=>'required|string|min:1'
        ]
    );


        $teacher = Teacher::where('id',$request->id)
                            ->where('password',$request->password)
                            ->first();

        $admin = Admin::where('id',$request->id)
                            ->where('password',$request->password)
                            ->first();



       

                           
        // return $teacher;
        if($teacher){
            $request->session()->put('user',$teacher->name);
            if ($request->remember) {
                setcookie('remember',$request->id, time()+36000);
               // Cookie::queue('name',$teacher->id."Teacher",time()+60);
            }
            
            
            else{
                setcookie('remember',"");
               // Cookie::queue('name',"");
            }
            return redirect()->route('teacherDash');
        }
        //return redirect()->route('login');

    // $admin = Admin::where('id',$request->id)
    //                ->where('password',$request->password)
    //                ->first();


    if($admin){
        $request->session()->put('admin',$admin->name);
        if ($request->remember) {
            setcookie('remember',$request->id, time()+36000);
            //Cookie::queue('name',$admin->id."Admin",time()+60);
        }
        
        
        else{
            setcookie('remember',"");
            //Cookie::queue('name',"");
        }
        return redirect()->route('adminDash');
    }
    return redirect()->route('login');
}







  

    // public function loginSubmit(Request $request){
    //     $teacher = Teacher::where('phone',$request->phone)
    //                         ->where('password',$request->password)
    //                         ->first();

    //     // $admin = Admin::where('phone',$request->phone)
    //     //                     ->where('password',$request->password)
    //     //                     ->first();
       

                           
    //     // return $teacher;
    //     if($teacher){
    //         $request->session()->put('user',$teacher->name);
                               
    //         return redirect()->route('teacherDash');
    //         //return view('home');
    //     }
    //     // elseif($admin){
    //     //     $request->session()->put('admin',$admin->adminName);
    //     //     return redirect()->route('adminDash');
    //     //     //return view('home');
    //     // }

      
        

    //     return back();
    // }



    /*public function loginSubmit2(Request $request){
       

        $admin = Admin::where('phone',$request->phone)
                            ->where('password',$request->password)
                            ->first();
       

                           
        
        if($admin){
            $request->session()->put('admin',$admin->adminName);
            return redirect()->route('adminDash');
            //return view('home');
        }

      
        

        return back();
    }*/


        public function logout(){
        //Session::flush();
        //if($teacher){
        session()->forget('user');//}
        //elseif($admin){
        session()->forget('admin');
       // }
        return redirect()->route('login');
    }



}


