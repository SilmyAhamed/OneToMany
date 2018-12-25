@extends('layouts/app')

@section('content')
    <div class="container mt-4">
        <h3>Student Subject Selection Form</h3>
        <form class="mt-4" action="{{action('SubjectController@store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Module</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="id"  placeholder="Module">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Index</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="student_id"  placeholder="Index">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Subject</label>
                <div class="col-sm-10">
                    <select class="form-control" name="subject_name">
                        @foreach($subjects as $key => $subject)
                            <option value="{{$key}}">{{$subject}}</option>
                        @endforeach
                    </select>
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