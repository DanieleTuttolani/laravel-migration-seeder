<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_NAME')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
  <header class="p-5 mb-4 text-center bg-dark">
        <h1 class="text-light">Orario Partenze/Arrivi</h1>
  </header>
  <div class="container bg-danger text-dark">
    <ul>
        @foreach ($trains as $train)
          <li>
            <h1>{{$train['departure']}} /..../ {{$train['arrival']}} </h1>
            <p> {{$train['departure_H']}}/..../ {{$train['arrival_H']}} </p>
          </li>
        @endforeach
    </ul>
  </div>
</body>

</html>