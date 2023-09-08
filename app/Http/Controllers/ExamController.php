<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Exam;
use App\Models\Task;
// use Haruncpi\LaravelIdGenerator\IDgenreator;


class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('exam');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {   
    //     $result['status'] = false;
    //     $result['message'] = "Something went wrong"; 
    //     $insert['name'] = $request['name'];
         
    //     $qury = DB::table('tasks')->insert($insert);
    //     if($qury){
           
    //         $result['status'] = true;
    //         $result['message'] = "Success";
    //     }else{
    //         $result['message'] = "User not loged in.";
    //    }
    //    return response()->json($result);
    // }

           $user = new Exam();
           $user->student_name = $request['name'];
           $user->email = $request['email'];
           $user->mobile_no= $request['contact'];
           $user->save();
      // dd($user->id); 
            $rollno = '202300'.$user->id;
            $update = DB::table('student_data')->where('id',$user->id)->update(['roll_no'=>$rollno]);

            return redirect('');
           // $insert['student_name'] = $request['name'];
           // $insert['email']        = $request['email'];
           // $insert['mobile_no']    = $request['contact'];

           // $data = DB::table('student_data')->

    

    
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
