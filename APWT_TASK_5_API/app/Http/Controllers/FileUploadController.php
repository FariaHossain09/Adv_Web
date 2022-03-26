<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\File;
// use App\Http\Requests\StoreFileUploadRequest;
// use App\Http\Requests\UpdateFileUploadRequest;

class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            //return view('pages.teacher.upload');
       
    }
   
    // public function upload()
    // {
        
    //         return view('pages.teacher.upload');
       
    // }


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
     * @param  \App\Http\Requests\StoreFileUploadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFileUploadRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function show(FileUpload $fileUpload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function edit(FileUpload $fileUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFileUploadRequest  $request
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFileUploadRequest $request, FileUpload $fileUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileUpload $fileUpload)
    {
       //
    }




    public function fileUpload()
    {
        return view('fileUpload');
    }

    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip,pptx',
        ]);
    
        $fileName = time().'.'.$request->file->extension();  
     
        $request->file->move(public_path('file'), $fileName);
  
        // /* Store $fileName name in DATABASE from HERE */
        File::create(['name' => $fileName]);
    
        return back()
            ->with('success','You have successfully file uplaod.')
            ->with('file',$fileName); 

        
        } 
    
}
