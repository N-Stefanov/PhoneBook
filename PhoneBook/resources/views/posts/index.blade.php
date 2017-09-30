@extends('layouts.app')
@section('content')
   @if(count($posts)>0)
   <table class="table table-striped" id="myTable">
    <tr>
        <td></td>
        <td><a href="/posts/?sort=Fname">Name</a></td>
        <td><a href="/posts/?sort=Lname">Last Name</a></td>
        <td><a href="">Mobil Phone</a></td>
        <td><a href="">Home Phone</a></td>
        <td><a href="">Created at</a></td>
        <td><a href="">Updated at</a></td>
        <td></td>
    </tr>
        @foreach($posts as $indexKey => $post)
        <tr>
                <td>{{$indexKey + 1}}</td>
                <td class="well" id="dDiv">
                    <a href="/posts/{{$post->id}}">{{$post->Fname}}</a>
                </td>
                <td class="well" id="dDiv">
                    <a href="/posts/{{$post->id}}">{{$post->Lname}}</a>
                </td>
                <td class="well" id="dDiv">
                    <a href="/posts/{{$post->id}}">{{$post->Mnumber}}</a>
                </td>
                <td class="well" id="dDiv">
                    <a href="/posts/{{$post->id}}">{{$post->Hnumber}}</a>
                </td>
                <td class="well" id="dDiv">
                    <a href="/posts/{{$post->id}}">{{$post->created_at->format('d-m-Y')}}</a>
                </td>
                <td class="well" id="dDiv">
                    <a href="/posts/{{$post->id}}">{{$post->updated_at->format('d-m-Y H:i:s')}}</a>
                </td>
                 <td><input type="button" value="Delete" onclick="deleteRow(this)" class="btn btn-danger pull-right"></td>
        </tr>
        @endforeach
        </table>
   @else
   <p>Not found</p>
   @endif
   {{ $posts->links() }}
@endsection





