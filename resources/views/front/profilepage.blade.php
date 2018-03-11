@extends('layouts.app')

@section('head')

	<link rel="stylesheet" href="{{asset('css/profilepage.css')}}">

@endsection

@section('title')

    Mon profil

@endsection

@section('content')

	@foreach($lineuser as $value)

		@if(Auth::id() == $value->id)

			<div class="vertical-center">
				<article id="card">

					<div id="image-container">

						@if (Auth::user()->avatar == NULL)

							<img src="/uploads/avatars/default.png" id="logo" style="background: #d1d1d1;">

							@else

								<img src="/uploads/avatars/{{ Auth::user()->avatar }}" id="logo">

						@endif

						<a href="{{route('settingspage')}}">Paramètres du compte</a>

					</div>

					<div id="news">
						<h1>{{Auth::user()->name}} {{Auth::user()->firstname}}</h1>
						<p><span>NOM : </span>{{Auth::user()->name}}</p>
						<p><span>PRENOM : </span>{{Auth::user()->firstname}}</p>
						<p><span>PSEUDO : </span>{{Auth::user()->username}}</p>
						<p><span>DESCRIPTION : </span>{{Auth::user()->description}}</p>
					</div>

				</article>
			</div>

		@endif

	@endforeach

@endsection