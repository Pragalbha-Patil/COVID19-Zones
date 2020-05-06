<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A project to display Zones over India using Data published by Govt. of India.">
        <meta name="keywords" content="COVID19, Coronavirus, COVID, Maps">
        <meta name="author" content="Pragalbha Patil">

        <title>COVID-19-Zones</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /*background-color: #b61924;*/
                background-color: #fff;
                color: #636b6f;
                font-family: 'Manrope', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
{{--        <script src="{{asset('particles.min.js')}}"></script>--}}
{{--        <div id="particles-js" style="position: absolute"></div>--}}
{{--        <script>--}}
{{--            particlesJS.load('particles-js', '{{asset('particles.json')}}', function() {--}}
{{--                console.log('callback - particles.js config loaded');--}}
{{--            });--}}
{{--        </script>--}}

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

            <div class="content w-95">
                <div class="title m-b-md">
                    COVID-19 Zones
                </div>
                <p>
                    A project to display Zones over India using Data published by Govt. of India.
                </p>
                <p>
                    <a href="{{route('map')}}" style="color:blue;">Click here to view Choropleth Map</a>
                </p>
{{--                <a href="{{asset('assets/data/data.csv')}}">Click here to download CSV data</a>--}}
                <p class="footer">
                    <span>
                        Created by
                        <a class="link1" href="https://github.com/Pragalbha-Patil"> Pragalbha Patil</a> &
                        <a class="link2" href="https://github.com/khushboo0406"> Khushboo Mehta</a>
                    </span>
                </p>

                <style>
                    .footer {
                        color: #2d995b;
                        width: 100%;
                        position: fixed;
                        bottom: 0;
                        text-align: center;
                    }
                    .link1 {
                        color: #2d995b;
                    }
                    .link2 {
                        color: #2d995b;
                    }
                </style>
            </div>
        </div>
    </body>
</html>
