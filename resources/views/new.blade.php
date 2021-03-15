@extends('layout.common')

@section('title', 'インデックスページ')
@section('keywords', 'キーワード1, キーワード2, キーワード3')
@section('description', 'インデックスページの説明')
@section('pageCss')
    <link rel="stylesheet" href="{{asset('/assets/css/index.css')}}">
@endsection

@include('layout.header')

@section('h2','新規登録ページ')
@section('content')
    <p>{{ $hello }}</p>
    @foreach($hello_array as $hello_word)
        {{ $hello_word }}<br>
    @endforeach

    <p>一つ選択します：{{ $selectOne }}</p>>

    <p><img src="{{asset('/assets/img/img.png')}}" width="100" alt="画像"></p>
    <a href="{{url('/')}}">トップページへ戻る</a>
@endsection

@include('layout.submenu')

@include('layout.footer')
