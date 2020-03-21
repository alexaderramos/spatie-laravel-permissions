<?php

namespace App\Http\Controllers\AuthStudents;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginStudentController extends Controller
{
    use AuthenticatesUsers;



    protected $redirectTo = '/students/home';


    public function __construct()
    {
        $this->middleware('guest.student')->except('logout');
    }

    public function showLoginForm()
    {
        return view('students.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('student');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->flush();

        $request->session()->regenerate();

        return redirect()->route('students.login');
    }
}
