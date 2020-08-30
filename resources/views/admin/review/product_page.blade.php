@extends('layouts.admin')
@section('title', '作品情報ページ')
@section('content')

<style>
    .button {
                margin-bottom: 20px;
            }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">作品情報</div>

                <div class="card-body">
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
                            <p>{{ $product->title }}</p>
                        </div>
                    </div>
                        
                    <div class="form-group row">
                        <label class="col-md-2 text-md-right" >基本情報</label>
                        <div class="col-md-10">
                            <p>{{ $product->body }}</p>
                        </div>
                    </div>
                      
                    <div class="form-group row">
                        <label for = "ave" class="col-md-2 col-form-label text-md-right">平均評価点</label>
                        <div class="col-md-8">
                            <p>{{ $average }}</p>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for = "sum" class="col-md-2 col-form-label text-md-right">合計レビュー</label>
                        <div class="col-md-8">
                           <p>{{ $count }}</p>
                        </div>
                    </div>
                    
                    <div class='button'>
                        <button type ="button" class="btn btn-warning mb-3 mr-3">
                            <a href="{{ route('comment.show',$product->id) }}">コメント</a>
                        </button>
                        <button type ="button" class="btn btn-warning mb-3">
                            <a href="{{ route('index') }}">戻る</a>
                        </button>
                    </div>
                        
                    <table class ="table table-bordered">
                        <thead>
                        <tr>
                            <th width='10%'>Comment_ID</th>
                            
                            <th width='10%'>User_ID</th>
                            <th width='10%'>評価点</th>
                            <th width='60%'>Comment</th>
                            <th width='10%'>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                        <tr>
                            <th>{{ $comment->id }}</th>
                            
                            <td>{{ $comment->user_id }}</td>
                            <td>{{ $comment->score }}</td>
                            <td>{{ $comment->body }}</td>
                            <td>
                                <button type ="button" class="btn btn-warning">
                                <a href="{{ route('comment.delete',[$product->id,$comment->id]) }}">削除</a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection