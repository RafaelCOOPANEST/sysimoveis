@extends('layouts.app')

@section('content')
<h1>Imóveis recentes</h1>

<form class="row g-2 mb-3" method="GET" action="{{ route('home') }}">
  <div class="col-auto">
    <input name="city" class="form-control" placeholder="Cidade" value="{{ request('city') }}">
  </div>
  <div class="col-auto">
    <input name="min_price" class="form-control" placeholder="Preço mínimo" value="{{ request('min_price') }}">
  </div>
  <div class="col-auto">
    <button class="btn btn-primary">Filtrar</button>
  </div>
</form>

<div class="row">
@foreach($properties as $p)
  <div class="col-md-6 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $p->title }}</h5>
        <p class="card-text">{{ Str::limit($p->description, 120) }}</p>
        <p><strong>Preço:</strong> R$ {{ number_format($p->price, 2, ',', '.') }}</p>
        <a href="{{ route('property.show', $p->id) }}" class="btn btn-sm btn-outline-primary">Ver detalhes</a>
      </div>
    </div>
  </div>
@endforeach
</div>

{{ $properties->links() }}
@endsection
