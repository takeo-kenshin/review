@extends('layouts.admin')
@section('title', '作品情報ページ')
@section('content')

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
                        <label class="col-md-2 text-md-right" >あらすじ</label>
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
                        
                    <table class ="table table-bordered">
                        <thead>
                        <tr>
                            <th width='10%'>User_ID</th>
                            <th width='20%'>評価点</th>
                            <th width='70%'>Comment</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->user_id }}</td>
                            <td>{{ $comment->score }}</td>
                            <td>{{ $comment->body }}</td>
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