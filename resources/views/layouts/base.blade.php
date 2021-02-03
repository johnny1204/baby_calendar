<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-50 flex flex-col min-h-screen">
    <header id="header" class="flex justify-between z-50 bg-blue-300 fixed h-100 w-full top-0 left-0 p-4">
        <h1 class="text-gray-50">baby_diary</h1>
        <v-app-bar-nav-icon @click.stop="drawer = !drawer" v-cloak class="ml-auto sm:invisible">
        </v-app-bar-nav-icon>
        <v-navigation-drawer v-model="drawer" right fixed temporary>
            <v-list nav dense>
                <v-list-item-group v-model="group" active-class="deep-purple--text text--accent-4">
                    @guest
                        <v-list-item>
                            <v-list-item-title><a href="{{ route('register') }}">会員登録</a></v-list-item-title>
                        </v-list-item>
                        <v-list-item>
                            <v-list-item-title><a href="{{ route('register') }}">ログイン</a></v-list-item-title>
                        </v-list-item>
                    @endguest
                </v-list-item-group>
            </v-list>
        </v-navigation-drawer>
    </header>
    @yield('main')
    <footer>
        フッター
    </footer>
</body>
@hasSection ('unique_js')
    @yield('unique_js')
@else
    <script src="{{ asset('js/app.js') }}"></script>
@endif

</html>
