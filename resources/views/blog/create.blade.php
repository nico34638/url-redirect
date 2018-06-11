@extends('layouts.app')

@section('content')

<div class="container">
  <h1>Raccourcir un nouvel article</h1>

  <form action="" method="POST">
    <input  type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <div class="form-group">
      <label>Nom de l'article :</label>
      <input type="text" name="name" id="name" placeholder="nom" class="form-control"/>
      <label>Contenu de l'article :</label>
      <input type="text" name="content" id="content" placeholder="Contenu" class="form-control"/>
    </br>
      <select class="form-control">
        @foreach ($categories as $category)
          <option>
            {{ $category->name}}
          </option>
        @endforeach
      </select>

     </div>
    <div class="form-group">
      <button class="btn btn-primary">Envoyez</button>
    </div>
  </form>
</div>

@endsection
