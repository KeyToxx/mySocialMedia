@extends('layouts.app')

@section('head')

	<link rel="stylesheet" href="{{asset('css/profilepage.css')}}">

@endsection

@section('title')

    Mon compte

@endsection

@section('content')

	@foreach($user as $value)

		@if(Auth::id() == $value->id)

			Afficher le profil nom, prenom, pseudo, avatar etc .... <br><br>

			<a href="{{route('settingspage')}}">Paramètres du compte</a><br><br>

		@endif

	@endforeach

@endsection