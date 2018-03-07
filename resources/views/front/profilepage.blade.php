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

		<article>

			<img src="/uploads/avatars/{{ Auth::user()->avatar }}" alt="avatar"><br><br>

			Afficher le profil nom, prenom, pseudo, avatar etc .... <br><br>

			<a href="{{route('settingspage')}}">Paramètres du compte</a><br><br>

		</article>

		@endif

	@endforeach

@endsection