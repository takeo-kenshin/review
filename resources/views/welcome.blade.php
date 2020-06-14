<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <title>レビューサイト</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
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
                font-size:30px;
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
                margin-bottom: 30px;
            }
            
            h1{
                font-size:50px;
                text-align: center;
                font-weight: 600;
                
            }
        </style>
    </head>
    <body>
        <div id="app">
        <h1>レビューサイト</h1>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">新規登録</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                目次
                </div>
                <p>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">あ〜お</button>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">か〜こ</button>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="links">
                    <a href="http://e26805fe45564a7bab3067f6253e1105.vfs.cloud9.us-east-2.amazonaws.com/login">あ</a>
                    <a href="http://e26805fe45564a7bab3067f6253e1105.vfs.cloud9.us-east-2.amazonaws.com/login">い</a>
                    </div>
                </div>
                <div class="collapse" id="collapseExample2">
                    <div class="links">
                    <a href="https://laravel.com/docs">か</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
