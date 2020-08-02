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
                                    <input type="text" class="form-control" id="product_id" placeholder="{{ $product->id }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="user_id" class="col-md-2 text-md-right">User ID</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="user_id" placeholder="{{ $user->id }}">
                                </div>
                            </div>
                     
                        <div class="form-group row">
                            <label for="score" class="col-md-2 text-md-right">評価</label>
                            <div class="col-md-6">
                                <input id="score-five" name="score" type="radio" value="five">
                                    <label for="score-five">5</label>
                                <input id="score-four" name="score" type="radio" value="four">
                                    <label for="score-four">4</label>    
                                <input id="score-three" name="score" type="radio" value="three">
                                    <label for="score-three">3</label> 
                                <input id="score-two" name="score" type="radio" value="two">
                                    <label for="score-two">2</label> 
                                <input id="score-one" name="score" type="radio" value="one">
                                    <label for="score-one">1</label>
                                    
                                @error('score')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                            <div class="col-md-4 offset-md-4">
                                {{ csrf_field() }}
                                <input type="submit" class="btn btn-primary" value="投稿">
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