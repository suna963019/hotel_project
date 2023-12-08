<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        main {
            min-height: 90vh;
        }
    </style>
</head>

<body>
    <header class="d-flex justify-content-between text-white bg-dark">
        <h1>@yield('title')</h1>
        <div>
            @auth
                <div class="d-flex">
                    <a href="/acount"><h4>会員情報</h4></a>
                    <a href="/logout"><h4>ログアウト</h4></a>
                </div>
            @endauth
            @guest
                <div class="d-flex">
                    <a href="/register"><h5>新規登録</h5></a>
                    <a href="/login"><h5>ログイン</h5></a>
                </div>
            @endguest
        </div>
        <div class="dropdown pull-right">
            <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                    class="bi bi-list text-white" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">ホーム</a>
                <a href="#" class="dropdown-item">ご予約はこちら</a>
                <a href="#" class="dropdown-item">メニュー</a>
                <a href="#" class="dropdown-item">お知らせ</a>
                <a href="#" class="dropdown-item">お問い合わせ</a>
            </div>
        </div>
    </header>
    <main class="d-flex justify-content-around">
        @yield('content')
    </main>
    <footer class="text-white bg-dark d-flex justify-content-around mt-100">
        <div>
            <a href="#" class="dropdown-item">ホーム</a>
            <a href="#" class="dropdown-item">ご予約はこちら</a>
            <a href="#" class="dropdown-item">メニュー</a>
            <a href="#" class="dropdown-item">お知らせ</a>
            <a href="#" class="dropdown-item">お問い合わせ</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
