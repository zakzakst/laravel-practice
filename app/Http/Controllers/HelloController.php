<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  public function index() {
    $data = [
      ['name'=>'山田たろう', 'mail'=>'taro@yamada'],
      ['name'=>'田中はなこ', 'mail'=>'hanako@flower'],
      ['name'=>'鈴木さちこ', 'mail'=>'sachico@happy'],
    ];
    return view('hello.index', ['data'=>$data]);
  }

  public function post(Request $request) {
    $msg = $request->msg;
    $data = [
      'msg' => $msg,
    ];
    return view('hello.index', $data);
  }
}
