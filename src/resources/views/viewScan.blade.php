@extends('layouts.master')

@section('title', 'New DScan')

@section('subnav')
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="/dscan/new">New DScan</a>
</nav>
@endsection

@section('content')
	
	<div class="row text-center">
		<div class="col">
			@if(($ship_total > 0) && ($ship_total < 5))
				Total ship count: <span class="badge badge-secondary">{{$ship_total}}</span>
			@elseif(($ship_total > 5) && ($ship_total < 10))
				Total ship count: <span class="badge badge-warning">{{$ship_total}}</span>
			@elseif($ship_total > 10)
				Total ship count: <span class="badge badge-danger">{{$ship_total}}</span>
			@endif
		</div>
		<div class="col">
			Dscan report time: <span class="badge badge-info">{{$reportedAt}}</span>
		</div>
	</div>
	&nbsp;
    <div class="row text-center">
	    <div class="col-sm">
	      <b>Ship Name:</b></br>
	      @foreach($ship_names as $ship_name => $count)
	      @if(($count > 0) && ($count < 5))
				<span class="float-left">{{$ship_name}}</span><span class="float-right badge badge-secondary">{{$count}}</span></br>
			@elseif(($count > 5) && ($count < 10))
				<span class="float-left">{{$ship_name}}</span><span class="float-right badge badge-warning">{{$count}}</span></br>
			@elseif($count > 10)
				<span class="float-left">{{$ship_name}}</span><span class="float-right badge badge-danger">{{$count}}</span></br>
			@endif
	      @endforeach
	    </div>
	    <div class="col-sm">
	      <b>Ship Types:</b></br>
	      @foreach($ship_types as $ship_type => $count)
	      @if(($count > 0) && ($count < 5))
				<span class="float-left">{{$ship_type}}</span><span class="float-right badge badge-secondary">{{$count}}</span></br>
			@elseif(($count > 5) && ($count < 10))
				<span class="float-left">{{$ship_type}}</span><span class="float-right badge badge-warning">{{$count}}</span></br>
			@elseif($count > 10)
				<span class="float-left">{{$ship_type}}</span><span class="float-right badge badge-danger">{{$count}}</span></br>
			@endif
	      @endforeach
	    </div>
	    <div class="col-sm">
	      <b>Ship Class:</b></br>
	      @foreach($ship_classes as $ship_class => $count)
	      @if(($count > 0) && ($count < 5))
				<span class="float-left">{{$ship_class}}</span><span class="float-right badge badge-secondary">{{$count}}</span></br>
			@elseif(($count > 5) && ($count < 10))
				<span class="float-left">{{$ship_class}}</span><span class="float-right badge badge-warning">{{$count}}</span></br>
			@elseif($count > 10)
				<span class="float-left">{{$ship_class}}</span><span class="float-right badge badge-danger">{{$count}}</span></br>
			@endif
	      @endforeach
	    </div>
  	</div>

@endsection