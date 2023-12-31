<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sunahara menu</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html {
            background-image: url(img/forest1.jpg);
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        body {
            background-position: center;
            opacity: 0.9;
            margin-top: 40px;
            margin-left: 60px;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 250vh;
            width: 90%;
        }


        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: left;
        }

        .title {
            font-size: 50px;
        }

        .container {
            display: flex;
        }

        img {
            width: 250px;
        }

        .card-text {
            text-align: left;
        }

        a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .logo img {
            width: 200px;
        }

        .menu {

            width: 300px;
        }


        figure {
            width: 350px;
            margin-top: 40px;
            font-size: 10px;
        }

        .msg {
            margin-left: 25px;
            margin-top: 0;
        }

        .garlley_box figure{
            width: 100%;
        }

        .to_top {
            font-size: 10px;
            margin: 25px, 0, 25px, 0;
        }

        figcaption {
            font-size: 12px;
        }

        .garlley_box img {
            width: 100%;
        }

        figcaption {
            font-size: 20px;
        }

        .course h1 {
            text-align: center;
        }

        .course_box {
            text-align: center;
            display: flex;
            flex-wrap: wrap;
        }

        .course_box img {
            width: 100%;
        }

    </style>
</head>

<body>

    <img src="{{ url('img/logo.png') }}" alt="KIKI SHIRETOKO" class="logo">
    <div class="msg">

    </div>
    {{-- </p> --}}
    <div class="content">

        <div class="garlley_box container">
            <figure>
                <h3>Dejeuner（ランチ）</h3>
                <img src="{{ url('img/lunch1.jpg') }}" alt=""class="menu">
                <figcaption>ランチはご予約制でございます。<br>TEL 0742-00-0001までお電話ください。</figcaption>
            </figure>
            <figure>
                <h3>Diner （ディナー）</h3>
                <img src="{{ url('img/diner1-1.jpg') }}" alt=""class="menu">

                <figcaption>ディナーは、コースのみのご用意です。
                    18:00～20:00 L.O.</figcaption>
            </figure>
        </div>

        <div class="course">
            <h1>コース名</h1>
            <div class="course_box">
                @foreach ($menus as $menu)
                    <figure>
                        <tr>
                            <figcaption>
                                <h2>{{ $menu->name }}</h2>
                            </figcaption>
                            <img src="{{ url($menu->url) }}" alt="">
                            <figcaption>
                                <h2>{{ $menu->price }}&nbsp;円</h2>
                            </figcaption>
                        </tr>
                    </figure>
                @endforeach
            </div>
        </div>
        <a href="/" class=to_top>Topページへ戻る</a>
    </div>
    {{-- </div> --}}
    {{-- </div> --}}
</body>

</html>
