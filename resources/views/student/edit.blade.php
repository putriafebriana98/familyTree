@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
        <br/>
            <br/>
            @if(count($errors)>0)
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                </ul>
                @endif
            <form method="post" class="form-horizontal" action="{{action('StudentController@update',$id)}}">
            {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH"/>

                <div class="form-group">
                    <label for="first name">First name:</label>
                    <input class="form-control" type="text" name="first_name_update" class="form-control" value="{{$student->first_name}}" placeholder="Enter your first name"></input>
                </div>
                <div class="form-group">
                    <label for="last name">Last name:</label>
                    <input class="form-control" type="text" name="last_name_update" class="form-control" value="{{$student->last_name}}" placeholder="Enter your last name"></input>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input class="form-control" type="text" name="address_update" class="form-control" value="{{$student->address}}" placeholder="Enter your address"></input>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Edit"/>
                </div>
            </form>

        </div>
    </div>
    @endsection
