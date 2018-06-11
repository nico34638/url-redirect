@extends('layouts.app')
@section('content')
  <div class="container">
    <h1>Bravo !!!</h1>
    <p>
      <a class="btn btn-primary" href="{{ action('LinksController@show', ['id' => $link->id]) }}">
        Votre lien 
      </a>
    </p>
  </div>
@endsection
