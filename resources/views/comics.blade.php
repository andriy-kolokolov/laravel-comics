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
        <div class="comics-wrapper">
            <div class="comics-container grid container p-5">
                @foreach($comics as $comic)
                    <div class="card">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <h5 class="text-center mt-2">{{ $comic['title'] }}</h5>
                    </div>
                @endforeach
            </div>
        </div>
</body>
</html>
