@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <a href="/create" class="btn btn-success pull-right">New</a>
                    <a href="/posts" class="btn btn-info">All</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
