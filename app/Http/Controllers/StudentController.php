<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        $courses = [
            'Computer Science' => 'Computer Science',
            'Civil Engineering' => 'Civil Engineering',
            'Bsc' => 'Bsc',
            'Quantity Surveying' => 'Quantity Surveying',
            'Infomation System' => 'Information System',
            'Hotel Managment' => 'Hotel Management'
        ];
        return view('student/index')->with('courses', $courses);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|unique:students|min:4',
            'name' => 'required',
            'email' => 'required',
            'course' => 'required'
        ]);

        $student = new Student();
        $student->id = $request->input('id');
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        // $student->done = $request->input('done');
        $student->save();
        return redirect('/')->with('success', 'Student details stored!');
    }
}
