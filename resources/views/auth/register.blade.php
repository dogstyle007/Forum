@extends('layouts.masters.main')

@section('page-content')

   <div class="container">

   		{{--@include('layouts.partials.nav')--}}

      @include('layouts.partials.form_errors')

   		{!! Form::open(['route' => 'post_register', 'id' => 'registration-form']) !!}

   		{!! Form::label('name', 'Full Name') !!}
   		{!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Full Name', 'required']) !!}
   		<br/>

      {!! Form::label('index', 'Student Index') !!}
      {!! Form::text('index', null, ['id' => 'index', 'class' => 'form-control', 'placeholder' => 'Example: wiuc-00-0000', 'required']) !!}
      <br/>

      {!! Form::label('dept', 'Department') !!}
      {!! Form::text('dept', null, ['id' => 'dept', 'class' => 'form-control', 'placeholder' => 'Example: Wcom', 'required']) !!}
      <br/>

      {!! Form::label('gender', 'Gender') !!}
      {!! Form::text('gender', null, ['id' => 'gender', 'class' => 'form-control', 'placeholder' => 'Example: Male or Female', 'required']) !!}
      <br/>

   		{!! Form::label('email', 'Email Address') !!}
   		{!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email Address', 'required']) !!}
   		<br/>
   		{!! Form::label('password', 'Password') !!}
   		{!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'required']) !!}
   		<br/>

   		 {!! Form::button('Register', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}

		{!! Form::close() !!}

    <br>
    <br>
    @include('layouts.partials.footer')

    </div> <!-- /container -->

    
    
    @stop