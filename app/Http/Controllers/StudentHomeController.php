<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.student');
    }

    public function index(){
        return view('students.home');
    }

}
