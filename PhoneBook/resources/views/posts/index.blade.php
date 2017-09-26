@extends('layouts.app')
@section('content')
   @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <a href="/posts/{{$post->id}}">{{$post->Fname}}</a>
            </div>
        @endforeach
   @else
   <p>Not found</p>
   @endif
@endsection