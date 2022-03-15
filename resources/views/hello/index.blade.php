@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ</li>
  <li>テスト
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <p>Controller value<br>'message' = {{$message}}</p>
  <p>ViewComposer value<br>'view__message' = {{$view__message}}</p>
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection