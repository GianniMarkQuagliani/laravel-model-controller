@extends('layouts.main')

@section('content')

<h1>I miei film</h1>
<div class="d-flex flex-wrap">

    @foreach ($movies as $movie)
    <div class="card m-3" style="width: 18rem;">
        <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
        <div class="card-body">
          <h5 class="card-title">{{ $movie->title }}</h5>
          <p class="card-text">{{ $movie->original_title }}</p>
          <p class="card-text">{{ $movie->nationality }}</p>
          <a href="#" class="btn btn-primary">Vai</a>
        </div>
      </div>
    @endforeach
</div>

@endSection
