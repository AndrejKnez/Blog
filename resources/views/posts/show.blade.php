@extends('layouts.app')

@section('content')
<a class="btn btn-info" href="/posts">Go back</a>
<h1>{{$post->title}}</h1>
<img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
<br><br>
<div>
    {{$post->body}}
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
    <a class="btn btn-success" href="/posts/{{$post->id}}/edit">Edit</a>
    
    {{Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST'])}}

        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

    {{Form::close()}}
    @endif
    @endif
</div>

    
@endsection