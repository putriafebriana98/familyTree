@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-122">

            @if($message=Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
            @endif
            <div align="right">
                <a href="{{route('student.create')}}" class="btn btn-success">add</a>
            </div>
            <table class="table table-hover table-bordered">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

            @foreach($students as $row)
            <tr>
                <td>{{$row['first_name']}}</td>
                <td>{{$row['last_name']}}</td>
                <td>{{$row['address']}}</td>
                <td><a href="{{action('StudentController@edit',$row['id'])}}" class="btn btn-warning btn-sm col-md-12">Edit</a></td>
                <td><a href="{{action('StudentController@destroy',$row['id'])}}" class="btn btn-danger btn-sm col-md-12">Delete</a></td>
            </tr>
            @endforeach
            </table>
        </div>
    </div>
    @endsection
