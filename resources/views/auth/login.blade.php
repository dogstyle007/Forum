@extends('layouts.masters.main')

@section('page-content')

  

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Log in to continue to WIUC SRC FORUM</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                @include('layouts.partials.form_errors')
                
                {!! Form::open (['route' => 'post_login', 'class'=>'form-signin', 'id' => 'registration-form'])  !!}
                {!! Form::label('index', 'Student Index Number') !!}
                
                {!! Form::text('index', null, ['id' => 'index', 'class' => 'form-control', 'placeholder' => 'eg: wiuc-00-0000', 'required', 'autofocus']) !!}
                <br>
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'required']) !!}
                <br>
                {!! Form::button('Log in', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}

                {!! Form::close() !!}

            </div>
            <br>
        </div>
    </div>
</div>


  <!-- <div class="container">


      <center> <img src="http://localhost/forum/public/image/WIUC-LOGO.png"> <h2>WIUC STUDENT FORUM LOGIN</h2></center>

   		{{--@include('layouts.partials.nav')--}}

      @include('layouts.partials.form_errors')

   		{!! Form::open(['route' => 'post_login', 'id' => 'registration-form']) !!}
  
   		{!! Form::label('index', 'Student Index Number') !!}
   		{!! Form::text('index', null, ['id' => 'index', 'class' => 'form-control', 'placeholder' => 'Example: wiuc/00/0000', 'required']) !!}
   		<br/>
   		{!! Form::label('password', 'Password') !!}
   		{!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'required']) !!}
   		<br/>
   		 {!! Form::button('Log in', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}

		{!! Form::close() !!}

    <br>


    </div> --><!-- /container -->

    @include('layouts.partials.footer')

    @stop