<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Movie Reviewer')</title>
  @include('layouts.stylesheets')
</head>
<body>
  @include('layouts.navbar')

  @yield('content')

  @include('layouts.scripts')
</body>
</html>
