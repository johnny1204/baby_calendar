@extends('./layouts/base')
@section('main')
    <main class="pt-16 m-2 sm:w-full md:w-1/2 md:mx-auto md:my-0">
        <div class="border-solid border bg-white border-white rounded shadow-xl py-10 px-2">
            <h2 class="text-center">ログイン</h1>
                <section class="p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label>
                            <input type="email" name="email"
                                class="mb-3 border-solid border w-full border-gray-400 rounded p-2" placeholder="メールアドレス">
                        </label>
                        <label>
                            <input type="password" name="password"
                                class="mb-3 border-solid border w-full border-gray-400 rounded p-2"
                                placeholder="パスワード（英数字をそれぞれ最低1文字を含んだ12文字以上）">
                        </label>
                        <div class="text-center m-2.5">
                            <button
                                class="border-solid border border-green-400 bg-green-400 rounded px-10 py-2 text-white font-semibold w-full">ログイン</button>
                        </div>
                        <div class="text-center m-2.5">
                            <button
                                class="border-solid border border-red-400 bg-red-400 rounded px-16 py-4 text-white font-semibold w-full">Googleアカウントでログイン</button>
                        </div>
                        <div class="text-center m-2.5">
                            <button
                                class="border-solid border border-blue-400 bg-blue-400 rounded px-16 py-4 text-white font-semibold w-full">Facebookアカウントでログイン</button>
                        </div>
                    </form>
                </section>
        </div>
    </main>
@endsection
