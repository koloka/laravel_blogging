<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .well{
            background: #ededed;
            padding: 5px;
            margin-bottom: 10px;
        }
        .row{
            margin: 0 !important;
        }
        .written-by{
            display: block;
            position: absolute;
            /* background: red; */
            bottom: 0;
            right: 20;
            font-size: 15px;
            font-weight: bold;
        }
        .content-body img{
            width: 40% !important;
            height: auto !important;
        }
        .demo-para{
            font-size: 20px;
        }
        .go-back{
            background: #f2f6fc;
            box-shadow: 5px 5px 10px #aaaaaa;
        }
        .navbarsection{
            display: block;
            float: left;
            width: 100%;
            height: 60px;
            background: red;
        }
        .bodysection{
            display: block;
            float: left;
            width: 100%;
            height: 60px;
            background: blue;
        }
    </style>
</head>

<body>
    <section class="navbarsection">
        @include('inc.navbar')
    </section>
    <section class="bodysection">
        @include('inc.messages')
        @yield('content')
    </section>
    




    

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
