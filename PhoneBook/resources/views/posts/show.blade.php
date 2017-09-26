@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-default">Go Back </a>
    <h1>{{$posts->Fname}}</h1>
    <div>
        Mobil Phone {{$posts->Mnumber}}
    </div>
    <div>
        Home Phone {{$posts->Hnumber}}
    </div>
    <hr>
        <smal>Writen on {{$posts->created_at}} by {{$posts->user->name}}</smal>
        <hr>
        <smal>Last updated on {{$posts->updated_at}}</smal>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $posts->user_id)
            <a href="/posts/{{$posts->id}}/edit" class="btn btn-default">Edit</a>
            {!!Form::open(['action'=>['PostController@destroy', $posts->id], 'method'=> 'POST', 'class'=> 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection