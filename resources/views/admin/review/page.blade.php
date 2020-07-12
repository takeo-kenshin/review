@extends('layouts.admin')
@section('title', '作品ページ新規投稿')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">作品新規投稿</div>

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
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-2 text-md-right" >基本情報</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                                </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {{ csrf_field() }}
                                <input type="submit" class="btn btn-primary" value="作成">
                                <button type="submit" class="btn btn-warning"><a href="{{ url('/') }}">戻る</a></button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection