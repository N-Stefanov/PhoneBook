@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
                            <td>Name<td>
                            <td></td>
                            <td></td>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->Fname}}<td>
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
