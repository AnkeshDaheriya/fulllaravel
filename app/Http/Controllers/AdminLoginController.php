<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class AdminLoginController extends Controller
{
    public function contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required|unique:contact",
            "phone" => "required",
            "massage" => "required",
        ]);
        if ($validator->passes()) {
            $user = new Contact();
            $user->name = $request->first_name . ' ' . $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->massage = $request->massage;
            $user->created_at = Carbon::now();
            $user->save();

            $request->session()->flash('success', 'contact Successfully');
            return redirect()->back()->with(['success' => 'contact Successfully']);


        } else {

            return redirect()->back()->withErrors($validator)->withInput();


        }

    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()) {
            if (\Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
                $admin = Auth::user();
                if ($admin->role == 'admin') {
                    $request->session()->flash('success', 'Welcome To Dashboard');
                    return redirect()->route('admin.dashboard');
                } else {
                    \Session::flush();
                    \Auth::logout();
                    $request->session()->flash('error', "You're not authorized");
                    return redirect()->route('admin.login')->with('error', "You're not authorized");
                }
            } else {
                $request->session()->flash('error', 'Either Email/Password is incorrect');
                return redirect()->route('admin.login')->with('error', "Either Email/Password is incorrect");
            }
        } else {
            return redirect()->route('admin.login')->withErrors($validator)->withInput($request->only('email'));

        }



    }
    public function login()
    {
        return view('admin.login');
    }
    public function index()
    {
        return view('admin.dashboard');
    }
    public function contact_list()
    {
        $contact = Contact::get();

        return view('admin.contact-list', compact('contact'));

    }
    public function logout()
    {
        \Session::flush();
        \Auth::logout();
        return redirect('/');
    }
    public function destroy(Request $request)
    {
        $contactID = $request->id;
        $contact = Contact::find($contactID);
        if (empty($contact)) {
            $request->session()->flash('error', 'Student not found');
            return response()->json([
                'status' => false,
                'error' => 'Student not found'
            ]);
        }
        $contact->delete();
        $request->session()->flash('success', 'Student delete Successfully');
        return response()->json([
            'status' => true,
            'success' => 'Student delete Successfully'
        ]);
    }

}
