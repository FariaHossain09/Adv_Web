<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    public function contactus()
    {
        return view('contactus') ;
    }


    public function contactcreatesubmitted(Request $request) //data submit howyar por request object akhane pabo
    {
        //validation
        $validate= $request ->validate([
            'name'=>'required|min:5|string',
            'id'=>'required|string|min:1',
            'subject'=>'required|string|min:4',
            'message'=>'required|string|min:4'
        ]);
        return "submitted" ;
    }
}
