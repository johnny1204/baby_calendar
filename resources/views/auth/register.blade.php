@extends('./layouts/base')
@section
    <main class="pt-12 md:flex md:justify-around md:items-center m-2 md:m-0">
        <div class="md:flex-2 border-solid border bg-white border-white rounded shadow-xl py-10 px-2">
            <h2 class="text-center">会員登録</h1>
            <section class="p-4">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <label>
                        <input type="text" name="nickname" class="mb-3 border-solid border w-full border-gray-400 rounded p-1" placeholder="ニックネーム">
                    </label>
                    <label>
                        <input type="email" name="email" class="mb-3 border-solid border w-full border-gray-400 rounded p-1" placeholder="メールアドレス">
                    </label>
                    <label>
                        <input type="password" name="password" class="mb-3 border-solid border w-full border-gray-400 rounded p-1" placeholder="パスワード（英数字をそれぞれ最低1文字を含んだ12文字以上）">
                    </label>
                    <label>
                        <input type="password" name="password_confirmation" class="mb-3 border-solid border w-full border-gray-400 rounded p-1" placeholder="パスワード（確認用）">
                    </label>
                    <div class="text-center m-2.5">
                        <button class="border-solid border border-green-600 bg-green-600 rounded px-10 py-2 text-gray-200 font-semibold">登録</button>
                    </div>
                </form>
            </section>
        </div>
        <div class="md:w-1/3">
            <div class="text-center m-2.5">
                <button class="border-solid border border-red-600 bg-red-600 rounded px-16 py-4 text-gray-200 font-semibold w-full">Googleで登録</button>
            </div>
            <div class="text-center m-2.5">
                <button class="border-solid border border-blue-600 bg-blue-600 rounded px-16 py-4 text-gray-200 font-semibold w-full">Facebookで登録</button>
            </div>
        </div>
    </main>
@endsection