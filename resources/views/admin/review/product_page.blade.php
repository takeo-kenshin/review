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
                        <label for = "ave" class="col-md-4 col-form-label text-md-right">平均評価点</label>
                            
                            
                        <label for = "sum" class="col-md-4 col-form-label text-md-right">合計レビュー</label>
                            
                             
                        <button type ="button" class="btn btn-warning">
                            <a href="{{ route('comment.show',$product->id) }}">コメント</a>
                        </button>
                    </div>
                        
                    <table class ="table table-bordered">
                        <thead>
                        <tr>
                            <th width='5%'>ID</th>
                            <th width='10%'>User</th>
                            <th width='10%'>点数</th>
                            <th width='75%'>Comment</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                        <tr>
                            <th>{{ $comment->id }}</th>
                            <td></td>
                            <td>{{ $comment->score }}</td>
                            <td>{{ $comment->body }}</td>
                            <td>
                                <div>
                                <button type="button" class="bth btn-warning">
                                    <a href="{{ url('/') }}">移動</a>
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
    </div>
</div>
@endsection