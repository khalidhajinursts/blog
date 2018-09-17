@extends('layouts.app')

@section('content')
<br>
    <h1>Posts</h1>
        @if(count($posts) >0)
            @foreach ($posts as $post)
                <div class="card card-body bg-light">
                    <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <p class="card-text">Written on {{$post->created_at}}</p>
                </div>
@endforeach
{{ $posts->links() }}
@else
<p> No posts found</p>
@endif

@endsection
