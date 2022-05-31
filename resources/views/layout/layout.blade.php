<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Link file.css --}}
    <link rel="stylesheet" href=" {{asset('css/app.css')}} ">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <title>Laravel</title>

</head>

<body>

    {{-- header --}}
    @include('partials.header')

    {{-- main --}}
    {{-- Corpo centrale --}}
    <main>

        {{-- Jumbotron --}}
        <section>
            @include('partials.jumbotron')
        </section>

        {{-- Sezione che viene modificata in base alla route --}}
        <section class=" {{ Request::route() -> getName() == 'comics' ? 'bg-black' : '' }} ">
            @yield('content')
        </section>

    </main>

    {{-- Footer --}}
    <footer>

        {{-- footer Link --}}
        <div class="footerTop">
            @include('partials.footer')
        </div>

        {{-- footer bottom --}}
        <div class="footerBottom">
            @include('partials.footerBottom')
        </div>

    </footer>

</body>

</html>
