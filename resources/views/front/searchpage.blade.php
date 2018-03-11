@extends('layouts.app')

@section('head')

    <link rel="stylesheet" href="{{asset('css/searchpage.css')}}">

@endsection

@section('content')

    @foreach($user as $value)
        mettre a droite statut connecté ou non a l'aide d'un code couleurs vert, rouge etc ...
        <article class="list-container">
            <div class="item">
                <ul>
                    <li>
                        <img src="/uploads/avatars/{{$value->avatar}}" alt="avatar">
                        <div class="value name"><span>{{$value->name}}</span></div>
                        <div class="value firstname"><span>{{$value->firstname}}</span></div>
                    </li>
                </ul>
            </div>
        </article>

    @endforeach

@endsection