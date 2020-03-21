<?php

namespace App\Http\Controllers\AuthStudents;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginStudentController extends Controller
{
    use AuthenticatesUsers;



    protected $redirectTo = '/students/area';


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        if (Auth::guard('students')->guest()){
            return view('students.auth.login');
        }else{
            return redirect($this->redirectTo);
        }
    }

    /*public function  authenticated(Request $request, $user)
    {
        return redirect('students/area');
    }*/

    protected function guard()
    {
        return Auth::guard('students');
    }

    public function logout()
    {
        Auth::guard('students')->logout();
        return redirect()
            ->route('students.login')
            ->with('status','Admin has been logged out!');
    }
}
