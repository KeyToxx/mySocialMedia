@extends('layouts.settings')

@section('head')

	<link rel="stylesheet" href="{{asset('css/settingspage.css')}}">

@endsection

@section('title')

    Paramètres

@endsection

@section('content')

	@auth

		<header>
			
			<div class="container-banner">
				<img src="http://via.placeholder.com/1920x200" id="banner">
			</div>

			<div class="container-logo">

				<img src="/uploads/avatars/{{ Auth::user()->avatar }}" id="logo">
	
			</div>

			<form id="form-logo" enctype="multipart/form-data" action="/parametres" method="POST">
				
				<input type="file" name="avatar">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
				<button type="submit">Mettre à jour l'avatar</button>

			</form>

		</header>

		<article class="container-form">

			@if(Session::has('message'))
				<div class="alert alert-success">{{Session::get('message')}}</div>
			@endif

			@foreach($errors->all() as $errors)
				<ul class="alert alert-danger">
					<li>{{$errors}}</li>
				</ul>
			@endforeach
			
			@foreach($lineuser as $value)

				@if(Auth::id() == $value->id)

				{!! Form::model($value,array('route'=>['parametres.update',$value->id],'method'=>'PUT')) !!}
		
					{!! Form::token() !!}

					<div class="left-form">
						{!! Form::text('name', null, ['id' => 'name', 'placeholder' => 'Nom *']) !!}
					</div>

					<div class="right-form">
						{!! Form::text('firstname', null, ['id' => 'firstname', 'placeholder' => 'Prénom *']) !!}
					</div>

					{!! Form::text('username', null, ['id' => 'username', 'placeholder' => 'Pseudonyme *']) !!}

					{!! Form::textarea('description', null, ['id' => 'description', 'placeholder' => 'Description']) !!}
					{!! Form::button('Enregistrez les modifications !', array('type' => 'submit')) !!}

				{!! Form::close() !!}

				@endif

				
			@endforeach

		</article>

		@else
		
			<article class="info vertical-center">

				<div class="alert alert-danger">
					<span>Vous devez être connecté pour accéder à cette page !</span>
				</div>

			</article>

	@endauth

	
@endsection

@section('js')

	<script type="text/javascript" src="{{asset('js/settingspage.js')}}"></script>

@endsection