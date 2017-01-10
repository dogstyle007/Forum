@extends('layouts.masters.main')

@section('page-content')


    <div class="container">
      <div class="row main">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title">Create your Account</h1>
                  </div>
              </div> 
        <div class="main-login main-center">
       @include('layouts.partials.form_errors')

      {!! Form::open(['route' => 'post_register', 'id' => 'registration-form']) !!}
      {!! Form::label('name', 'Full Name') !!}
      <div class="cols-sm-10">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
      {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Full Name', 'required', 'autofocus']) !!}
      </div>
      </div>
      <br/>

      {!! Form::label('index', 'Student Index') !!}
      <div class="cols-sm-10">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></i></i></span>
      {!! Form::text('index', null, ['id' => 'index', 'class' => 'form-control', 'placeholder' => 'Example: wiuc-00-0000', 'required']) !!}
      </div>
      </div>
      <br/>

      {!! Form::label('dept', 'Department') !!}
      <div class="cols-sm-10">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></i></span>
      {!! Form::text('dept', null, ['id' => 'dept', 'class' => 'form-control', 'placeholder' => 'Example: Wcom', 'required']) !!}
      </div>
      </div>
      <br/>

      {!! Form::label('gender', 'Gender') !!}
      <div class="cols-sm-10">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-venus" aria-hidden="true"></i></i></span>
      {!! Form::text('gender', null, ['id' => 'gender', 'class' => 'form-control', 'placeholder' => 'Example: Male or Female', 'required']) !!}
      </div>
      </div>
      <br/>

      {!! Form::label('email', 'Email Address') !!}
      <div class="cols-sm-10">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
      {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email Address', 'required']) !!}
      </div>
      </div>
      <br/>
      {!! Form::label('password', 'Password') !!}
      <div class="cols-sm-10">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
      {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'required']) !!}
      </div>
      </div>
      <br/>

      {!! Form::button('Register', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}

      {!! Form::close() !!}
                 </div>
          </form>
        </div>
      </div>
    </div>
    <br>


  <!-- <div class="container">

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
    

    </div> --><!-- /container -->


    

    @include('layouts.partials.footer')
    
    @stop