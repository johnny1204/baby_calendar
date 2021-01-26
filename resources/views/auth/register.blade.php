<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header></header>
    <div class="my-0 mx-auto w-1/2 border-solid border border-gray-100 rounded shadow-xl">
        <h1 class="text-center">会員登録</h1>
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
</body>
</html>