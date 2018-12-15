@extends('layouts/app')

@section('content')
    <div class="container mt-4">
        <h3>Student Inquery Form</h3>
        <form class="mt-4" action="{{action('StudentController@store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Index</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="index"  placeholder="Index">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name"  placeholder="Student Name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Course</label>
                <div class="col-sm-10">
                    <select class="form-control" name="course">
                        @foreach($courses as $key => $course)
                            <option value="{{$key}}">{{$course}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Done</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="done">
                        <label class="form-check-label">Course done by this student</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection