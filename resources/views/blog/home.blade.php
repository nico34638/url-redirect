@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      @foreach ($posts as $post)


        <h2><a hreh="{{$post->slug}}">{{ $post->name}}</a></h2>
        <p>
          <em>{{ $post->slug}}</em>
        </p>

        <p>
        </p>
        <a href="/blog/create">ajouter un article</a>
      @endforeach

      @foreach ($categories as $category)
        <h1>{{ $category->name }}</h1>
      @endforeach
    </div>
  </div>
</div>

@endsection
