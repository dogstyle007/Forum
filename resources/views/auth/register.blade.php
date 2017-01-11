@extends('layouts.masters.main')

@section('page-content')

<div class="container">

	{{--@include('layouts.partials.nav')--}}

	@include('layouts.partials.form_errors')

	{!! Form::open(['url' => 'auth/register', 'id' => 'registration-form']) !!}

	{!! Form::label('name', 'Full Name') !!}
	{!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Full Name', 'required']) !!}
	<br/>
	{!! Form::label('index', 'Student Index') !!}
	{!! Form::text('index', null, ['id' => 'index', 'class' => 'form-control', 'placeholder' => 'Example: wiuc-00-0000', 'required']) !!}
	<br/>
	<div class="row">
		<div class="col-md-12">
			<label>Your role</label>
			<div class="checkbox">
				<label>
					<input type="radio" name="role" value="student"> Student
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="radio" name="role" value="staff"> Staff
				</label>
			</div>
		</div>
	</div>
	<div class="row" id="student">
		<div class="col-md-12">
			{!! Form::label('department', 'Department') !!}
			<select name="dept" class="form-control">
				@foreach($studentCats as $studentDept)
				          <option value="{{ $studentDept->id }}">{{ $studentDept->name }} </option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="row" id="staff">
		<div class="col-md-12">
			{!! Form::label('department', 'Department') !!}
			<select name="dept" class="form-control">
				@foreach($staffCats as $staffDept)
				          <option value="{{ $staffDept->id }}">{{ $staffDept->name }}</option>
				@endforeach
			</select>
		</div>
	</div>

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
	<script>
		$( document ).ready(function() {
			$('#staff').hide();
			$('#student').hide();

			$('input[type=radio][name=role]').change(function() {
				if (this.value == 'student') {
					$('#staff').hide();
					$('#student').show();
					$('#index').attr('required',true);
					$('#number').attr('required',false);
				}
				else if (this.value == 'staff') {
					$('#staff').show();
					$('#student').hide();
					$('#index').attr('required',false);
					$('#number').attr('required',true);
				}
			});
		});
	</script>

</div> <!-- /container -->



@stop