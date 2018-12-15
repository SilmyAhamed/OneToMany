<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Subject;

class HomeController extends Controller
{
    public function index()
    {
        $students = DB::table('students')->get();
        // $subjects = DB::table('subjects')->get();
        return view('home/index')
            ->with('students', $students)
            /* ->with('subjects', $subjects)*/;
    }
}
