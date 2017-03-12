@extends('layouts.app')

@section('content')
<div class="container">
  <div class="jumbotron">
    <h2 class="display-3">{{$post->subject}}</h2><hr>
    <p class="lead">{{$post->content}}</p><hr>
    <div class="well">
	    {!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'delete']) !!}
	  	{!! Form::button('Delete', ['class'=>'btn btn-lg btn-danger pull-right', 'role'=>'button', 'type'=> 'submit']) !!}
	  	{!! Form::close() !!}
	  	<a class="btn btn-lg btn-info" href="/home" role="button">Home</a>
	  	<a class="btn btn-lg btn-warning" href="/posts" role="button">All</a>
	  	<a class="btn btn-lg btn-success" href="/posts/{{$post->id}}/edit" role="button">Edit</a><br>
	</div>
  </div>
</div> 
@endsection
