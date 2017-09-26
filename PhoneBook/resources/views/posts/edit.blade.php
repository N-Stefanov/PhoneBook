@extends('layouts.app')
@section('content')
   <h1>Edit Contact</h1>
   {!! Form::open(['action' => ['PostController@update', $post->id], 'method'=> 'POST']) !!}
        <div class="form-group">
            {!! Form::label('FirstName', 'FirstName') !!}
            {{Form::text('Fname',$post->Fname,['class' => 'form-control', 'placeholder' => 'FirstName'])}}
        </div>
        <div class="form-group">
            {!! Form::label('LastName', 'Last Name') !!}
            {{Form::text('Lname',$post->Lname,['class' => 'form-control', 'placeholder' => 'Last Name'])}}
        </div>
        <div class="form-group">
            {!! Form::label('MobileNumber', 'Mobile number') !!}
            {{Form::number('Mnumber',$post->Mnumber,['class' => 'form-control', 'placeholder' => 'Mobile number'])}}
        </div>
        <div class="form-group">
            {!! Form::label('HomeNumber', 'Home Number') !!}
            {{Form::number('Hnumber',$post->Hnumber ,['class' => 'form-control', 'placeholder' => 'Home Number'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
   {!! Form::close() !!}
@endsection