<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- //Bootstrap 開始--}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script> --}}
        {{-- //Bootstrap ここまで--}}

        <title>Restaurante Sunahara</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html {
                background-image: url(img/forest2.jpg);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            body {
                background-color: white;
                background-position: center;
                opacity: 0.9;
                margin-top: 0px;
                margin-left: 60px;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
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
                text-align: center;
            }

            .title {
                font-size: 50px;
            } 

            img {
                width: 800px;       
            }

            .logo img {
                width: 300px;
                margin-left: 430px;
            }

            .main1 img{
            width: 45%;
        }


            .card {
                margin: 15px;
            }
            .card-text {
                text-align: left;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            margin-bottom: 20px;
            }

            .m-b-md {
                margin-top: 10px;
                margin-bottom: 30px;
               
                text-align: left;
                margin-left: 20px;
              
            }
            /* .container2 {
                display: flex;
                justify-content: space-around;
            } */
            .btn {         
             
                border:1px solid darkgray;
                background-color: white;
                border-radius: 3px;
              
                width: 100px;
                height: 35px;
                font-size: 13px;
                
            }

        
       
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md logo">
                    <img src="{{ url('img/logo.png') }}" alt="Restaurante Sunahara">
                </div>
                <div class="main1">
                    <img src="{{ url('img/nara1-2.jpg') }}" alt="Restaurante Sunahara">
                </div>
         
                <div class="container2">
                <div><img src="{{ url('img/hotel1.jpg') }}" alt="">
                </div>
                <div><img src="{{ url('img/eagle.jpg') }}" alt="">
                </div>
                <div><img src="{{ url('img/bath1.jpg') }}" alt="">
                </div>
                <div><img src="{{ url('img/risu.jpg') }}" alt="">
                </div>
            </div>
            <br>
                <div class="container">
                <div class="links">
                    <a href="customer/add">Member</a>
                    <a href="login/">Reserve</a>
                    <a href="menu/">Menu</menu></a>
                    <a href="roomtype">News</a>
                    <a href="https://nova.laravel.com">Access</a>
                </div>
            </div>
        </div>
    </body>
</html>