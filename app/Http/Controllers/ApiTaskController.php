<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use DB;

class ApiTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
               $data = Task::get();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function apistore(Request $request)


    { 
         $response['status'] = false;
         $response['message'] = "Something went";

           $insert['name'] = $request['name'];
           $insert['email'] = $request['email'];
           $insert['contact'] = $request['contact'];
          
          
           $insert['password'] =  bcrypt($request['password']);
           $insert['massage'] = $request['massage'];
           $output = Task::insert($insert);//
    
          if($output){
            $response['status'] = true;
            $response['message'] = "Insert Success";
         }

             return response()->json($response);
  } 
   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
       $data = Task::find($id);

        return response()->json($data);
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
    public function apiupdate(Request $request, string $id)

    {
         $name = $request['name']
      $data = Task::where('id',$request->id)->udate(['name'=> $name]);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $data = Task::where('id',$request->id)->delete();
       if($data){
         $response['status'] = true;
         $response['message'] = "Success";
         
       }else{
         $response['status'] = false;
         $response['message'] = "id is not found ";

       }
       return response()->json($response);
   }
    
}
