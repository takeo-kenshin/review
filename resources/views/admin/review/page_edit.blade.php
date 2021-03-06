@extends('layouts.admin')
@section('title', '作品情報編集')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">作品情報編集</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('page.update',$product->id) }}" enctype="multipart/form-data">
                        @csrf

                        @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <div class="form-group row">
                            <label for="syllabary" class="col-md-2 col-form-label text-md-right">五十音</label>
                            <div class="col-md-8">
                                <input id="syllabary" type="text" class="form-control @error('syllabary') is-invalid @enderror" name="syllabary" value="{{ $product->syllabary }}">
                                <span id="help8" class="form-text text-muted">
                                    例‥あ=11 い=12 う=13 え=14 お=15 か=21 き=22 く=23 け=24 こ=25 
                                </span>
                                @error('syllabary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="title" class="col-md-2 col-form-label text-md-right">作品名</label>
                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $product->title }}" required autocomplete="title" autofocus>
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
                                    <textarea class="form-control" name="body" rows="20">{{ $product->body }}</textarea>
                                </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                {{ csrf_field() }}
                                <input type="submit" class="btn btn-warning mr-3" value="編集">
                                <button type="submit" class="btn btn-warning"><a href="{{ route('index') }}">戻る</a></button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection