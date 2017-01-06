@extends('layouts.masters.main')

 @section('title')Make a new post @stop

@section('page-content')


   <div class="container">

   		{{--@include('layouts.partials.nav')--}}

      @include('layouts.partials.form_errors')

   		{!! Form::model($post, ['route' => 'edit_post', 'id' => 'edit_post-form']) !!}
  		
  		{!! Form::hidden('post_id', $post->id) !!}
   		{!! Form::label('topic', 'Post Topic') !!}
   		{!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placeholder' => 'topic', 'required']) !!}
   		<br/>
      {!! Form::label('category', 'Category') !!}
      <select name="category" class="form-control">

      @foreach($categories as $category)
      	@if( $category->id == $post->category_id )
        	<option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
        	<option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
      @endforeach
      </select>
      <br/>

   		
      {!! Form::label('body', 'Body') !!}


   	 {!! Form::textarea('body', null, ['id' => 'summernote', 'class' => 'required']) !!}

   		<br/>
   		 {!! Form::button('Update Post', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}

		{!! Form::close() !!}


    <br>


    @include('layouts.partials.footer')

    </div> <!-- /container -->

     
     
    @stop