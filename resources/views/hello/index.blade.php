@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ</li>
  <li>テスト
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <p>必要なだけ記述できます。</p>

  <!-- @component('components.message')
    @slot('msg__title')
      CAUTION!
    @endslot
    @slot('msg__content')
      これはメッセージの表示です。
    @endslot
  @endcomponent -->

  @include('components.message', ['msg__title'=>'OK', 'msg__content'=>'サブビューです。'])
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection