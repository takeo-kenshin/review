<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <title>映画レビューサイト</title>

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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
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

            h1{
                font-size:40px;
                text-align: center;
                font-weight: 600;
                padding:60px 0 10px 0;
            }
            
        </style>
        
    </head>
    <body>
    <div class="container">
        <div class="row">
        <h1>映画レビューサイト</h1>
        </div>
        <div class="row">
            @if (Route::has('login'))
                <div class="top-right links ">
                    @auth
                        <a href="{{ route('page') }}">作品投稿</a>
                        <a href="{{ url('/home') }}">ユーザー情報</a>
                        <a href="{{ url('/') }}">閲覧用ページ</a>
                    @else
                        <a href="{{ route('login') }}">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">新規登録</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>   
            <div class="row">
                <div class="col-md-8">
                    <form method="GET" action="{{ action('Admin\ReviewController@product_index') }}" enctype="multipart/form-data">
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
            </div>    
          
        <div class="row">
            <div class="list col-md-12 mx-auto">
                <div class="row">
                <table class ="table table-bordered table-Active">
                    <thead>
                        <tr>
                            <th width='5%'>ID</th>
                            <th width='50%'>作品名</th>
                            <th width='10%'>平均評価点（点）</th>
                            <th width='10%'>レビュー数（件）</th>
                            <th width='25%'>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <th>{{ $product->id }}</th>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->comments()->avg('score') }}</td>
                            <td>{{ $product->comments()->count() }}</td>
                            <td>
                                <div>
                                <button type="button" class="bth btn-warning mr-4">
                                    <a href="{{ route('product.show',$product->id) }}">詳細</a>
                                </button>
                                
                                <button type="button" class="bth btn-warning mr-4">
                                    <a href="{{ route('page.edit',$product->id) }}">編集</a>
                                </button>
                                
                                <button type="button" class="bth btn-warning" data-toggle="modal" data-target="#modal1">
                                削除
                                </button>
                                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="label1">確認</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        削除しますか？
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">いいえ</button>
                                        <button type="submit" class="btn btn-warning">
                                            <a href="{{ route('product.delete',$product->id) }}">はい</a>
                                        </button>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>   
    </div>
    </body>
</html>
