@extends('layouts.main')

@section('content')

<h1>{{ $movies->title }}</h1>
<div>
    <img src="{{ $movies->image }}" alt="{{ $movies->title }}">
</div>

@endSection
