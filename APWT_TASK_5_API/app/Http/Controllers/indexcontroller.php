<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index() {
        return view('home');
    }
    
    public function product() {
        $products=array('Computer','Laptop','printer');
        return view('product') ->with ('products',$products);
    }

    public function teams ()
    {
        $teams=array('Faria   ','Zunayed   ','Ritu   ','Jony   ');
        $id=array('19-40217-1','19-11111-1','19-22222-1','19-33333-1');
        return view('teams') 
        -> with ('teams', $teams)
        ->with ('id',$id);
       
    }

    

    public function contactus() {
        return view('contactus');
    }

    public function aboutus() {
        return view('aboutus');
    }

    public function teacherDash(){
        return view('pages.teacher.teacherDash');

    }

    public function adminDash(){
        return view('pages.admin.adminDash');

    }
}
