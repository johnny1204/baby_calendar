<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="bg-gray-50">
        <header class="z-50 bg-blue-300 fixed h-100 w-full top-0 left-0 p-4">
            <h1 class="text-gray-50">baby_diary</h1>
        </header>
        @yield('main')
        <footer>
            フッター
        </footer>
    </body>
</html>