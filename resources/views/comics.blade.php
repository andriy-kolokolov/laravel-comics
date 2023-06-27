<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('components.header')
    @foreach($comics as $comic)
        <div class="card">
            <h2>{{ $comic['title'] }}</h2>
            <p>{{ $comic['description'] }}</p>
            <!-- Add more card details as needed -->
        </div>
    @endforeach
</body>
</html>
