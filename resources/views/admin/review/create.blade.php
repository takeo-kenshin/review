@extends('layouts.admin')
@section('title','コメント新規投稿')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">コメント新規投稿</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('comment.create',$product->id) }}" enctype="multipart/form-data">
                        @csrf

                        @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                        @endif

                            <div class="form-group row">
                                <label for="product_id" class="col-md-2 text-md-right">Product ID</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="product_id" name="product_id" value="{{ $product->id }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="user_id" class="col-md-2 text-md-right">User ID</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $id = Auth::id() }}" readonly>
                                </div>
                            </div>
                     
                            <div class="form-group row">
                                <label for="score" class="col-md-2 text-md-right">点数</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" id="score" name="score" min='0' max='5'>
                                </div>
                            </div>
                        
                        <div class="form-group row">
                            <label class="col-md-2 text-md-right" >コメント</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                                </div>
                                
                                @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                {{ csrf_field() }}
                                <input type="submit" class="btn btn-warning mr-3" value="投稿">
                                <button type="submit" class="btn btn-warning"><a href="{{ route('product.show',$product->id) }}">戻る</a></button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection