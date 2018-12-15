@extends('layouts/app')

@section('content')
    <div class="container mt-4">
        <h3>Student Information List</h3>
        @if(count($students) > 0)
            <table class="table mt-2">
                <thead>
                    <tr>
                        <th>Index</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Done</th>
                        <th>Subject</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->index}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->course}}</td>
                            <td>{{$student->done}}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Student information list is empty!</p>
        @endif
    </div>
@endsection