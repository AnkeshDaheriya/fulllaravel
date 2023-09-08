<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('register1');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $fileName = '';

          if($request->hasFile('image1')){
           $file = $request->file('image1');
            $file->getClientOriginalName();
           $ext = $file->getClientOriginalExtension();
           $fileName = time().'.'.$ext; 
         

            $destinationPath = 'imagefile';
             $file->move($destinationPath,$fileName);
       } 
            
      
      else{
          dd('notwork');
        }

       
           $insert['name'] = $request['name'];
           $insert['email'] = $request['email'];
           
           $insert['image'] =  $fileName;
           $insert['password'] =  bcrypt($request['password']);
           
            $output = DB::table('likesimage')->insert($insert);
        
        if($output){
            $msg = 'sucessce';
        }else{
            $msg = 'error';
     }
      
      dd('yes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
