@extends('layouts.masters.main')

 @section('title')Make a new post - @stop

@section('page-content')


<div>
  
            <center><div class="btn-group" style="margin-top:50px;">
                <a href="/" class="btn btn-lg btn-primary">Recent Posts</a>
                
            </div></center>

</div>

   <div class="container">

   		{{--@include('layouts.partials.nav')--}}

      @include('layouts.partials.form_errors')

   		{!! Form::open(['id' => 'post-question-form']) !!}
  
   		{!! Form::label('topic', 'Post Topic') !!}
   		{!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placeholder' => 'topic', 'required']) !!}
   		<br/>
      {!! Form::label('category', 'Category') !!}
      <select name="category" class="form-control">

      @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
      </select>
      <br/>

   		
      {!! Form::label('body', 'Body') !!}


   	 {!! Form::textarea('body', null, ['id' => 'summernote', 'class' => 'required']) !!}

   		<br/>
   		 {!! Form::button('Publish Post', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}

		{!! Form::close() !!}



     <br>


 @include('layouts.partials.footer')

    </div> <!-- /container -->

    
     
    @stop