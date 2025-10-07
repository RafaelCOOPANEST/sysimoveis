<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name','SysImoveis') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">SysImoveis</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
