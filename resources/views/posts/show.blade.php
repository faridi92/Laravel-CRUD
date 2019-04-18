@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-info">Go Back</a>
    <h3>{{$post->title}}</h3>
    <p>{{$post->body}}</p>
    <hr>
    <small>written on {{$post->created_at}}</small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'float-right']) !!}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
        @endif
    @endif
@endsection