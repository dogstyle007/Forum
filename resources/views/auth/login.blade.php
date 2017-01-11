

@extends('layouts.masters.main')

@section('page-content')

   <div class="container">


      <center> <img src="
/image/WIUC-LOGO.png"> <h2>WIUC STUDENT FORUM LOGIN</h2></center>

   		{{--@include('layouts.partials.nav')--}}

      @include('layouts.partials.form_errors')

   		{!! Form::open(['url' => 'auth/login', 'id' => 'registration-form']) !!}
  
   		{!! Form::label('index', 'Student Index Number') !!}
   		{!! Form::text('index', null, ['id' => 'index', 'class' => 'form-control', 'placeholder' => 'Example: wiuc/00/0000', 'required']) !!}
   		<br/>
   		{!! Form::label('password', 'Password') !!}
   		{!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'required']) !!}
   		<br/>
   		 {!! Form::button('Log in', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}

		{!! Form::close() !!}

    <br>


    </div> <!-- /container -->

    @include('layouts.partials.footer')

    

    @stop