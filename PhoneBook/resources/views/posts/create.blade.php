@extends('layouts.app')
@section('content')
   <h1>Create new person</h1>
   {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'onchange' => 'ValidateForm()', 'onsubmit'=>'FormValidation()']) !!}
        <div class="form-group">
            {!! Form::label('FirstName', 'FirstName') !!}
            {{Form::text('Fname','',['class' => 'form-control','id' =>'firstName', 'placeholder' => 'FirstName'])}}
            <div class="hidden" id="div1">
                <p>First name must be more than 3 characters</p>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('LastName', 'Last Name') !!}
            {{Form::text('Lname','',['class' => 'form-control', 'id' =>'lastName', 'placeholder' => 'Last Name'])}}
            <div class="hidden" id="div2">
                <p>Last name must be more than 3 characters</p>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('MobileNumber', 'Mobile number') !!}
            {{Form::text('Mnumber','',['class' => 'form-control', 'id' =>'mNumber', 'placeholder' => 'Mobile number'])}}
            <div class="hidden" id="div3">
                <p>Phone numer must be only from numbers</p>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('HomeNumber', 'Home Number') !!}
            {{Form::text('Hnumber','',['class' => 'form-control','id' =>'hNumber', 'placeholder' => 'Home Number'])}}
            <div class="hidden" id="div4">
                <p>Phone numer must be only from numbers</p>
            </div>
        </div>
        {!! Form::submit('Submit', ['class' => 'btn btn-primary','onsubmit'=>'test()']) !!}
   {!! Form::close() !!}
@endsection