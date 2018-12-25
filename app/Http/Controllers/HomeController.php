<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('id')->get();
        return view('home/index')->with('students', $students);
    }

    public function show($id)
    {
        $subject = Student::find($id)->subject;
        return view('home/show')->with('subject', $subject);
    }
}
