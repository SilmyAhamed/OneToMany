<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Student;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = [
            'Computer System' => 'Computer System',
            'Personal Computing' => 'Personal Computing',
            'Programming' => 'Programming'
        ];
        return view('subject/index')->with('subjects', $subjects);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'module' => 'required|unique:subjects|min:3',
            'student_index' => 'required|min:4',
            'subject_name' => 'required'
        ]);
    
        $subject = new Subject();
        $subject->module = $request->input('module');
        $subject->student_index = $request->input('student_index');
        $subject->subject_name = $request->input('subject_name');
        $subject->save();
        return redirect('/')->with('success', 'Subject inserted');
    }
}
