@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 45px;"  >id</th>
          <th>Subject</th>
          <th>Content</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th style="width: 45px;"><center><i class="fa fa-cog"></i></center></th>
          <th style="width: 45px;"><center><i class="fa fa-trash"></i></center></th>
        </tr>
      </thead>
      
      <tbody>
      @foreach($posts as $post)
        <tr>
          <th><a href="/posts/{{$post->id}}" class="btn btn-md btn-info">{{$post->id}}</a></th>
          <td>{{$post->subject}}</td>
          <td>{{$post->content}}</td>
          <td>{{$post->created_at}}</td>
          <td>{{$post->updated_at}}</td>
          <td>
          <a href="posts/{{$post->id}}/edit" class="btn btn-md btn-success"><i class="fa fa-pencil"></i></a></td>
          <td>
          {!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'delete']) !!}
          {!! Form::button('<i class="fa fa-trash-o">
          </i>', ['class'=>'btn btn-md btn-danger', 'role'=>'button', 'type'=> 'submit']) !!}
          {!! Form::close() !!}

          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  <div class="text-center">
    {!! $posts->links(); !!}
</div>
@endsection