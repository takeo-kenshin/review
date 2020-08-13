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
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapse-kana" aria-expanded="false" aria-controls="collapse-kana">あ〜お</button>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapse-kana2" aria-expanded="false" aria-controls="collapse-kana2">か〜こ</button>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapse-kana3" aria-expanded="false" aria-controls="collapse-kana3">さ〜そ</button>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapse-kana4" aria-expanded="false" aria-controls="collapse-kana4">た〜と</button>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapse-kana5" aria-expanded="false" aria-controls="collapse-kana5">な〜の</button>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapse-kana6" aria-expanded="false" aria-controls="collapse-kana6">は〜ほ</button>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapse-kana7" aria-expanded="false" aria-controls="collapse-kana7">ま〜も</button>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapse-kana8" aria-expanded="false" aria-controls="collapse-kana8">や〜よ</button>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapse-kana9" aria-expanded="false" aria-controls="collapse-kana9">ら〜ろ</button>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapse-kana10" aria-expanded="false" aria-controls="collapse-kana10">わ</button>
                </p>
                <div class="collapse" id="collapse-kana">
                    <div class="links">
                    <a href="#a">あ</a>
                    <a href="#a">い</a>
                    <a href="#a">う</a>
                    <a href="#a">え</a>
                    <a href="#a">お</a>
                    </div>
                </div>
                <div class="collapse" id="collapse-kana2">
                    <div class="links">
                    <a href="k">か</a>
                    <a href="k">き</a>
                    <a href="k">く</a>
                    <a href="k">け</a>
                    <a href="k">こ</a>
                    </div>
                </div>
                <div class="collapse" id="collapse-kana3">
                    <div class="links">
                    <a href="#">さ</a>
                    <a href="k">し</a>
                    <a href="k">す</a>
                    <a href="k">せ</a>
                    <a href="k">そ</a>
                    </div>
                </div>
                <div class="collapse" id="collapse-kana4">
                    <div class="links">
                    <a href="k">た</a>
                    <a href="k">ち</a>
                    <a href="k">つ</a>
                    <a href="k">て</a>
                    <a href="k">と</a>
                    </div>
                </div>
                <div class="collapse" id="collapse-kana5">
                    <div class="links">
                    <a href="k">な</a>
                    <a href="k">に</a>
                    <a href="k">ぬ</a>
                    <a href="k">ね</a>
                    <a href="k">の</a>
                    </div>
                </div>
                <div class="collapse" id="collapse-kana6">
                    <div class="links">
                    <a href="k">は</a>
                    <a href="k">ひ</a>
                    <a href="k">ふ</a>
                    <a href="k">へ</a>
                    <a href="k">ほ</a>
                    </div>
                </div>
                <div class="collapse" id="collapse-kana7">
                    <div class="links">
                    <a href="k">ま</a>
                    <a href="k">み</a>
                    <a href="k">む</a>
                    <a href="k">め</a>
                    <a href="k">も</a>
                    </div>
                </div>
                <div class="collapse" id="collapse-kana8">
                    <div class="links">
                    <a href="k">や</a>
                    <a href="k">ゆ</a>
                    <a href="k">よ</a>
                    </div>
                </div>
                <div class="collapse" id="collapse-kana9">
                    <div class="links">
                    <a href="k">ら</a>
                    <a href="k">り</a>
                    <a href="k">る</a>
                    <a href="k">れ</a>
                    <a href="k">ろ</a>
                    </div>
                </div>
                <div class="collapse" id="collapse-kana10">
                    <div class="links">
                    <a href="k">わ</a>
                    </div>
                </div>
                
                <div class="page-post">
                    <button type="button" class="btn btn-warning btn-lg btn-block">
                       <a href="{{ route('page') }}">作品投稿ページへ</a>
                    </button> 
                </div>
                
                <table class ="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th width='5%'>ID</th>
                            <th width='5%'>五十音</th>
                            <th width='50%'>作品名</th>
                            <th width='10%'>平均評価点（点）</th>
                            <th width='10%'>レビュー数（件）</th>
                            <th width='10%'>詳細</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $product)
                        <tr>
                            <th>{{ $product->id }}</th>
                            <th>{{ $product->syllabary }}</th>
                            <td>{{ $product->title }}</td>
                            <td>{{ $avg_score = \App\Comment::avg('score') }}</td>
                            <td>{{ $count = \App\Comment::count('id') }}</td>
                            <td>
                                <div>
                                <button type="button" class="bth btn-warning">
                                    <a href="{{ route('product.show',$product->id) }}">移動</a>
                                </button>
                                </div>
                            </td>
                            <td>
                            <div>
                            <button type="button" class="bth btn-warning">
                            <a href="{{ route('page.edit',$product->id) }}">編集</a>
                            </button>
                            </div>
                            </td>
                            <td>
                            <div>
                            <button type="button" class="bth btn-warning">
                            <a href="{{ route('product.delete',$product->id) }}">削除</a>
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
