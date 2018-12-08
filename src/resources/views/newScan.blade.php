@extends('layouts.master')

@section('title', 'New DScan')

@section('subnav')
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="/dscan/new">New DScan</a>
</nav>
@endsection

@section('content')

    {!! Form::open(['url' => 'dscan/postscan', 'class' => 'text-center']) !!}
      {!! Form::label('paste', 'Paste your DScan here...') !!}
      {!! Form::textarea('paste', '', ['class' => 'form-control', 'name' => 'scan', 'rows' => 15]) !!}
    </br>
      {!! Form::submit('Submit Dscan', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection