@extends('layouts.app')

@section('content')
<h1>{{ $property->title }}</h1>
<p><strong>Local:</strong> {{ $property->city }} - {{ $property->state }}</p>
<p><strong>Preço:</strong> R$ {{ number_format($property->price,2,',','.') }}</p>
<p>{{ $property->description }}</p>

@if($property->agent)
  <h4>Corretor</h4>
  <p>{{ $property->agent->name }} - {{ $property->agent->phone }} - {{ $property->agent->email }}</p>
@endif

<p><a href="{{ $property->url_original }}" target="_blank">Ver no portal original</a></p>
@endsection
