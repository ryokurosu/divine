<!doctype html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Savannah-FX') }}</title>
    <meta property="og:title" content="{{ config('app.name', 'Savannah-FX') }}" >
    <meta property="og:type" content="website" >
    <meta property="og:url" content="{{url()->current()}}" >
    <meta property="og:image" content="{{url('/thumbnail.png')}}">
    <meta property="og:site_name" content="{{ config('app.name', 'Savannah-FX') }}" >
    <meta property="og:description" content="{{ config('app.name', 'Savannah-FX') }}" >
    <meta name="twitter:card" content="summary" >

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</style>
</head>
<body id="top">
    <div class="top-container">
        <div class="content">
            <div class="title m-b-md">
                <img src="{{url('logo.jpg')}}" alt="{{config('app.name')}}">
                <!-- {{config('app.name')}} -->
            </div>

            <a class="sign-in" href="{{route('login')}}">LOGIN</a>
            <a class="create-account" href="{{route('register')}}">REGISTER</a>

        </div>
    </div>
</body>
</html>
