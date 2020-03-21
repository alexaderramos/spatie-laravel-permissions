<?php

namespace App\Http\Controllers\AuthStudents;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterStudentController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/students/home';

    public function __construct()
    {
        $this->middleware('guest.student');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return Student::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        return view('students.auth.register');
    }

    protected function guard()
    {
        return Auth::guard('student');
    }
}
