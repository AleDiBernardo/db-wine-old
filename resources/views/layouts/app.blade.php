<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')

    <title>Document</title>

</head>
<body>
    @include('../partials/header')

    <main>

    {{-- Bootstrap still working --}}
    <h1 class="text-white fw-bold">{{ $greetings }}</h1>

    {{-- Image use sample --}}
    <img src="{{Vite::asset('resources/img/sample.jpeg')}}" alt="">
        @yield('content')

        <span>Also Fontawesome --> </span>
        <i class="fa-solid fa-house"></i>
    
    </main>

    @include('../partials/footer')
</body>
</html>