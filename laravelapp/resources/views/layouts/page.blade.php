<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        html {
            background-image: url(img/forest2.jpg);
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
        }

        body {
            background-color: white;
            background-position: center;
            opacity: 0.9;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            display: flex;
            justify-content: center;
            flex-flow: column;
        }

        #all {
            width: 100%;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-flow: column;
            justify-content: space-between;
        }

        .home img {
            width: 500px;
        }

        .links a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            margin: 12px 0px;
        }

        /* 砂原追加 */
        p,
        a,
        th {
            text-decoration: none;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
        }

        header {
            margin: 30px 30px 100px 30px;
        }

        footer {
            margin: 100px 30px 30px 30px;
        }


        .cpr {
            text-transform: none;
        }

        .acount p {
            margin: 16px 10px 0% 10px;
        }

        .text-center {
            min-width: 30px;
        }

        .acount-submit {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        .reserve-table{
            max-width:1000px; 
        }
    </style>
</head>

<body>
    <div id="all">
        <header>
            <div class="d-flex justify-content-between">
                <div class="title logo">
                    <a href="/"><img src="{{ url('img/logo.png') }}" alt="Restaurante Sunahara"></a>
                </div>
                <div class="dropdown ">
                    <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                            class="bi bi-list menuicon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </button>
                    <div class="dropdown-menu links">
                        <a href="/" class="dropdown-item">Home</a>
                        <a href="/reserve/add" class="dropdown-item">Reserve</a>
                        <a href="/course" class="dropdown-item">Menu</a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-start">
                <div class="dropdown">
                    <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @auth
                            {{ Auth::user()->name }}様
                        @endauth
                        @guest
                            ゲスト様
                        @endguest
                    </button>
                    <div class="dropdown-menu links">
                        @auth
                        <a href="/reserve/index" class="dropdown-item">予約の確認</a>
                            <a href="/acount" class="dropdown-item">会員情報の確認</a>
                            <a href="/acountedit" class="dropdown-item">会員情報の変更</a>
                            <a href="/acountdelete" class="dropdown-item">会員情報の削除</a>
                            <a href="/logout" class="dropdown-item">Logout</a>
                        @endauth
                        @guest
                            <a href="/register" class="dropdown-item">Register</a>
                            <a href="/login" class="dropdown-item">Login</a>
                        @endguest
                    </div>
                </div>
            </div>

        </header>
        <main class="d-flex justify-content-around">
            @yield('content')
        </main>
        <footer>
            <div class="d-flex justify-content-center ">
                <div class="links">
                    <a href="/" class="dropdown-item">Home</a>
                    <a href="/reserve/add" class="dropdown-item">Reserve</a>
                    <a href="/courses" class="dropdown-item">Menu</a>
                </div>
                <div class="links">
                    @auth
                        <a href="/acount" class="dropdown-item">会員情報の確認</a>
                        <a href="/acountedit" class="dropdown-item">会員情報の変更</a>
                        <a href="/acountdelete" class="dropdown-item">会員情報の削除</a>
                        <a href="/logout" class="dropdown-item">Logout</a>
                    @endauth
                    @guest
                        <a href="/register" class="dropdown-item">Register</a>
                        <a href="/login" class="dropdown-item">Login</a>
                        <a href="/reserve/del" class="dropdown-item">delete</a>
                    @endguest
                </div>
            </div>
            <p class="cpr text-end"><small>copyright 2023 sunahara.</small></p>

        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
