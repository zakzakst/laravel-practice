@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ</li>
  <li>テスト
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <table>
    @foreach($data as $item)
      <tr>
        <th>{{$item['name']}}</th>
        <td>{{$item['mail']}}</td>
      </tr>
    @endforeach
  </table>
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection