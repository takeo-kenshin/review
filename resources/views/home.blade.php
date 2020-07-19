@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ユーザー情報</div>
                
                <div class='card-body'>
                    <li>名前:{{$auth->name}}</li>
                    <li>性別:{{$auth->gender}}</li>
                    <li>生年月日:{{$auth->birthday}}</li>
                    <li>メールアドレス:{{$auth->email}}</li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection