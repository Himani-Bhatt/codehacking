@extends('layouts.admin')

@section('content')
<div class="row">
	<h1>Create Posts</h1>
	{!! Form::open(['method'=>'post', 'action'=>'AdminPostsController@store','files'=>true]) !!}
	{!! csrf_field() !!}
	<div class="form-group">
		{!! Form::label('title','Title:') !!}
		{!! Form::text('title',null,['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('category_id','Category:') !!}
		{!! Form::select('category_id',array(1 =>'PHP',0 => 'JAVASCRIPT'),null,['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('photo_id','Photo:') !!}
		{!! Form::file('photo_id',[''=> 'Choose Options'] ,null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('body','Description:') !!}
		{!! Form::textarea('body',null,['class'=>'form-control','rows'=>3]) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}
</div>
	<div class="row">
	@include('includes.form_error')
	</div>
@stop