<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $data = User::get();
        $data = User::leftJoin('likes','users.id','=','likes.user_id')->select('users.name','users.email','users.massage','users.image','likes.likedby')->get();
        
       return view('index',compact('data'));
       json_decode($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register1');
    }
    public function store(Request $request)

    { 
      // $validated = $request->validate([
      //     'name' => 'required|min:3',
      //     'email' => 'required|unique:users|max:100',
      //     'contact' => 'required',
          
      //     'image' => 'required',
          
      //     'password' => 'required|min:6',
      //     'massage' => 'required',
      // ]);


          $fileName = '';
          if($request->hasFile('image')){
           $file = $request->file('image');
            $file->getClientOriginalName();
           $ext = $file->getClientOriginalExtension();
           $fileName = time().'.'.$ext; 
         

            $destinationPath = 'imagefile';
             $file->move($destinationPath,$fileName);
       } 
       
           $insert['name'] = $request['name'];
           $insert['email'] = $request['email'];
           
            $insert['image'] =  $fileName;
           $insert['password'] = $request['password'];
          
           
     
        $output = DB::table('users')->insert($insert);
        return $output;
            
         if($output){
            
            $response = "Insert Success";

         }
             
             return redirect($response);
        }      

    

    /**
     * Store a newly created resource in storage.
     */
    public function apistore(Request $request)

    {     
         $response['status'] = false;
         $response['message'] = "Something went";

           $fileName = '';
           if($request->hasFile('image')){
           $file = $request->file('image');
           $ext = $file->getClientOriginalExtension(); 
           $fileName = time().'.'.$ext; 
           $tempPath = $file->getRealPath();

         $destinationPath = 'imagefile';
         $file->move($destinationPath,$fileName);
       } 
       
           $insert['name'] = $request['name'];
           $insert['email'] = $request['email'];
           $insert['contact'] = $request['number'];
           $insert['gander'] = $request['radio'];
           $insert['image'] =  $fileName;
           $insert['password'] =  bcrypt($request['password']);
           $insert['massage'] = $request['massage'];
            $output = User::insert($insert);
     
        // $output = DB::table('users')->insert($insert);
        // return $output;
         if($output){
            $response['status'] = true;
            $response['message'] = "Insert Success";
         }

             return response()->json($response);
        }      

    


    /**
     * Display the specified resource.
     */
    public function show($id)
    {

       $data = User::find($id);
       return view('usview',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
       return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
          $response['status'] = false;
          $response['message'] = "Something went";
       
           $id = $request['id'];
           $update['name'] = $request['name'];
           $update['email'] = $request['email'];
           $update['contact'] = $request['number'];
           $update['gander'] = $request['radio'];
           
           $update['massage'] = $request['massage'];
           $check = User::where('id',$id)->update($update);

            if($check) {
           $response['status'] = true;
           $response['message'] = "Success";
         
       }
           // dd($check);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {  
        $id = $request['id'];

         
    }

//Api start 
    public function usersAdd(){
         $response['status'] = false;
         $response['message'] = "Something went";
         $data = User::get();
     if($data){
         $response['status'] = true;
         $response['message'] = "Success";
         $response['data'] = $data;
      }else{
        $response['status'] = false;
         $response['message'] = "kuch nahi mila went";
      }

     return response()->json($response);
         
     }      

     public function apiupdate(Request $request){
          $response['status'] = false;
          $response['message'] = "Something went";
                 $id = $request['id'];
                 
                 $name = $request['name'];
         $data = User::where('id',$id)->update(['name' => $name]);

        if($data){
         $response['status'] = true;
         $response['message'] = "Success";
         
       }else{
         $response['status'] = false;
         $response['message'] = "id is not found ";

       }
       return response()->json($response);
       }       
       public function  apidelete(Request $request){
         $response['status'] = false;
         $response['message'] = "Something went";
                $id = $request['id'];
                $data = User::where('id',$id)->delete();
       if($data) {
          $response['status'] = true;
         $response['message'] = "Success";
         
       }
       else{
         $response['status'] = false;
         $response['message'] = "id is not found ";

       }
         return response()->json($response);
    }        
  }  
