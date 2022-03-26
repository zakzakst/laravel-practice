@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <table>
    <tr>
      <th><a href="/hello?sort=name">Name</a></th>
      <th><a href="/hello?sort=mail">Mail</a></th>
      <th><a href="/hello?sort=age">Age</a></th>
    </tr>
    @foreach ($items as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
      </tr>
    @endforeach
  </table>
  {{$items->appends(['sort' => $sort])->links()}}
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection