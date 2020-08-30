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
                padding:40px 0 10px 0;
            }
            
            .page-post{
                padding:40px 0 40px 0;
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
                        <a href="{{ url('/home') }}">ユーザー情報</a>
                        <a href="{{ route('index') }}">投稿</a>
                    @else
                        <a href="{{ route('login') }}">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">新規登録</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <div class="content">
                <div class="col-md-10">
                    <form method="GET" action="{{ action('ViewController@product_index') }}" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right">タイトル</label>
                        <div class="col-md-8">
                        <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </div>
                
                <table class ="table table-bordered table-Active">
                    <thead>
                        <tr>
                            <th width='50%'>作品名</th>
                            <th width='20%'>平均評価点（点）</th>
                            <th width='15%'>レビュー数（件）</th>
                            <th width='15%'>詳細</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->comments()->avg('score') }}</td>
                            <td>{{ $product->comments()->count() }}</td>
                            <td>
                                <div>
                                <button type="button" class="bth btn-warning">
                                    <a href="{{ route('product.readonly',$product->id) }}">移動</a>
                                </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                
            </div>
        </div>
        </div>
    </body>
</html>
