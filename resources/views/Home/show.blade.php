@extends('layouts/app')

@section('content')
    <div class="container mt-4">
        <a class="btn btn-outline-dark mb-2" href="/">Go back</a>
        <h3>Student Subjects List</h3>
        @if(count($subject) > 0)
            <table class="table mt-2">
                <tr>
                    <td><th>Index</th></td>
                    <td>{{ $subject[0]->student->id }}</td>
                </tr>
                <tr>
                    <td><th>Name</th></td>
                    <td>{{ $subject[0]->student->name }}</td>
                </tr>         
            </table>           
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Subjects</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subject as $sub)
                        <tr>
                            <td>{{ $sub->subject_name }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No subject selected!</p>
        @endif
    </div>
@endsection