@extends('master')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <br/>
            <h3 align="center">Add data for student</h3>
            <br/>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>
                </div>
            @endif
            <form method="post" action="{{url('student')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="first name">First Name:</label>
                    <input type="text" name="first_name" class="form-control" placeholder="Please enter your first name"/>
                </div>
                <div class="form-group">
                    <label for="last name">Last Name:</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Please enter your last name"/>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" class="form-control" placeholder="Please enter your address"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Add New Data"/>
                    <a href="{{route('student.index')}}" class="btn btn-info">View Data</a>
                </div>
            </form>
        </div>
    </div>

@endsection
