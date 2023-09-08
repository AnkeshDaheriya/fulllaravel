<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function sendmail()
    {
        
       // $user = DB::table('users')->where('id','1');
           $data['name']  = 'raj rajak';
           $tomail = 'vishwakarmaji9911@gmail.com';
           $subject = "Invoice Pending of Last";
           Mail::send(
             'test',
              $data,
              function($massage) use ($tomail,$subject){
                $massage->to($tomail);
                $massage->from(
                   env('MAIL_FROM_ADDRESS'),
                   env('MAIL_FROM_NAME')
                );
                $massage->subject($subject);
              }
           );
           
    }
}

