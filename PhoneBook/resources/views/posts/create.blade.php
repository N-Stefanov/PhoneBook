@extends('layouts.app')
@section('content')
   <h1>Create new person</h1>
   {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('FirstName', 'FirstName') !!}
            {{Form::text('Fname','',['class' => 'form-control', 'placeholder' => 'FirstName'])}}
        </div>
        <div class="form-group">
            {!! Form::label('LastName', 'Last Name') !!}
            {{Form::text('Lname','',['class' => 'form-control', 'placeholder' => 'Last Name'])}}
        </div>
        <div class="form-group">
            {!! Form::label('MobileNumber', 'Mobile number') !!}
            {{Form::number('Mnumber','',['class' => 'form-control', 'placeholder' => 'Mobile number'])}}
        </div>
        <div class="form-group">
            {!! Form::label('HomeNumber', 'Home Number') !!}
            {{Form::number('Hnumber','',['class' => 'form-control', 'placeholder' => 'Home Number'])}}
        </div>
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
   {!! Form::close() !!}
@endsection