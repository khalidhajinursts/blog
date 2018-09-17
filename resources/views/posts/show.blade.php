@extends('layouts.app')

@section('content')
<br>
<a href="/posts" class="btn btn-primary"> Go back </a>
<br>
<hr>
    <h1>{{$post -> title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small> written on {{$post -> created_at}} </small>

@endsection

