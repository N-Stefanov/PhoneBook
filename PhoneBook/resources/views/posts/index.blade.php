@extends('layouts.app')
@section('content')
   @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well" id="dDiv">
                <a href="/posts/{{$post->id}}">{{$post->Fname}}</a>
                <button class="btn btn-danger pull-right" id="deliteJs">Delete</button>
            </div>
        @endforeach
   @else
   <p>Not found</p>
   @endif
@endsection