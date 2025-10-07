@extends('layouts.app')

@section('content')
<h1>Dashboard</h1>

<h3>Últimos imóveis</h3>
<ul>
@foreach($properties as $p)
  <li><a href="{{ route('property.show', $p->id) }}">{{ $p->title }}</a> — {{ $p->city }} — R$ {{ number_format($p->price,2,',','.') }}</li>
@endforeach
</ul>
@endsection
