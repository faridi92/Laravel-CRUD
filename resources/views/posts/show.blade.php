@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-info">Go Back</a>
    <h3>{{$post->title}}</h3>
    <p>{{$post->body}}</p>
    <hr>
    <small>written on {{$post->created_at}}</small>

@endsection