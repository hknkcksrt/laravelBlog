@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="/posts/{{$post->id}}" method="post">
          {{csrf_field()}}
          <fieldset>
            <legend class="text-center">Edit Post</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="subject">Subject</label>
              <div class="col-md-9">
                <input id="subject" name="subject" type="text" placeholder="{{$post->subject}}" value="{{$post->subject}}" class="form-control" disabled>
              </div>
            </div>
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="content">Your Content</label>
              <div class="col-md-9">
                <textarea class="form-control" id="content" name="content" placeholder="{{$post->content}}" rows="7">{{$post->content}}</textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
          
        </div>
      </div>
    </div>
</div>
@endsection

