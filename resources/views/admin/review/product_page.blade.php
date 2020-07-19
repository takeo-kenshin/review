@extends('layouts.admin')
@section('title', '作品情報ページ')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">作品情報</div>

                <div class="card-body">
                    <form method="POST" action="{{ action('Admin\ReviewController@product_page') }}" enctype="multipart/form-data">
                        @csrf

                        @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <div class="form-group row">
                            <label for="title" class="col-md-2 col-form-label text-md-right">作品名</label>

                            <div class="col-md-8">
                                <p>{{ $product_form->title }}</p>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-2 text-md-right" >あらすじ</label>
                            <div class="col-md-10">
                                <p>{{ $product_form->body }}</p>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            
                                <label for = "ave" class="col-md-4 col-form-label text-md-right">平均評価点</label>
                            
                            
                                <label for = "sum" class="col-md-4 col-form-label text-md-right">合計レビュー</label>
                            
                            
                                <button type ="button" class="btn btn-warning">
                                    <a href="{{ action('Admin\ReviewController@add') }}">コメント</a>
                                </button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection