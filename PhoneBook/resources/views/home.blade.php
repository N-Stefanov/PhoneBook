@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3> Your contacts list </h3>
                    <hr>
                    <a href="/posts/create" class="btn btn-default">Add New Contact</a>
                    <hr>
                    <table class="table table-striped">
                        <tr>
                            <td></td>
                            <td><a href="">Name</a></td>
                            <td><a href="">Last Name</a></td>
                            <td><a href="">Mobil Phone</a></td>
                            <td><a href="">Home Phone</a></td>
                            <td><a href="">Created at</a></td>
                            <td><a href="">Updated at</a></td>
                            <td></td>
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
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                <td>{!!Form::open(['action'=>['PostController@destroy', $post->id], 'method'=> 'POST', 'class'=> 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
