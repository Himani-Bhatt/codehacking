@extends('layouts.admin')

@section('content')
	<h1>Media</h1>
	@if($photos)
	<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created</th>
       
      </tr>
    </thead>
    <tbody>
    @if($posts)
    	@foreach($photos as $photo)
	      <tr>
	        <td> {{ $photo->id }} </td> 
          <td> {{$photo->name}}  </td>
            <td> {{ $photo->created_at->diffForhumans() }} </td>         
             </tr> 
      @endforeach
     @endif
    </tbody>
  </table>
  @endif
@stop