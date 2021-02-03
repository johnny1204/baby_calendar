@extends('./layouts/base')

@section('main')
    <main class="pt-20 flex-1">
        <div class="sm:relative">
            <img class="w-full object-cover" src="{{ asset('img/main_image.svg') }}" alt="keyvisual">
            <div class="sm:absolute sm:bottom-10 sm:right-4 sm:visible invisible">
                <a class="rounded-full text-white bg-green-400 py-2 px-4 sm:mx-4 border-solid border-green-400 border-4"
                    href="{{ route('register') }}">会員登録</a>
                <a class="rounded-full text-white bg-pink-400 py-2 px-4 border-solid border-pink-400 border-4"
                    href="{{ route('login') }}">ログイン</a>
            </div>
        </div>
    </main>
@endsection
