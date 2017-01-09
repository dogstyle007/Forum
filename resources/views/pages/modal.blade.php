@extends('layouts.masters.main')
@section('title')Register - @stop
@section('page-content')

<center><div class="btn-group" style="margin-top:50px;">
                <a href="{{ route('get_register')}}" class="btn btn-lg btn-primary">Register as Student</a>
            </div></center>


            <br>

<center><div class="btn-group" style="margin-top:50px;">
                <a href="{{ route('get_guest_register')}}" class="btn btn-lg btn-primary">Register as Guest</a>
            </div></center>
                
                

            <!--<li><a href="{{ route('get_register')}}">Register</a></li>-->


@stop