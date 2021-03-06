@extends('layouts.admin')

@section('content')


<h3>Here you can edit the post</h3>

<div class="col-md-6">
{!! Form::open(['method' => 'POST' , 'action'=>'AdminCategoryController@store']) !!}


	<div class="form-group">
	{!!Form::label('name' ,'Name :') !!}
	{!!Form::text('name' , null , ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
	{!!Form::submit('Create Category' , ['class'=>'btn btn-primary']) !!}
	</div>
	
{!! Form::close() !!}
</div>

<div class="col-md-6">

@if($categories)

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created At</th>
      </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
    <tr>
         <td>{{$category->id}}</td>
         <td> <a href="{{route('categories.edit' , $category->id)}}">{{$category->name}}</a> </td>
         <td>{{$category->created_at ? $category->created_at : 'No Date' }}</td>
    </tr>
    @endforeach
    </tbody>
  </table>

@endif
	
</div>

@endsection