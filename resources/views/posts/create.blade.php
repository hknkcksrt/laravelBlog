@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="/store" method="post">
          {{csrf_field()}}
          <fieldset>
            <legend class="text-center">Create New Post</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="subject">Subject</label>
              <div class="col-md-9">
                <input id="subject" name="subject" type="text" placeholder="Your Subject" class="form-control">
              </div>
            </div>
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="content">Your Content</label>
              <div class="col-md-9">
                <textarea class="form-control" id="content" name="content" placeholder="Please enter your content here..." rows="7"></textarea>
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
          @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
          @endif
        </div>
      </div>
    </div>
</div>
@endsection

