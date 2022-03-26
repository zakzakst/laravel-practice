<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Person;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{
  public function index(Request $request) {
    $user = Auth::user();
    $sort = $request->sort;
    $items = Person::orderBy($sort, 'asc')
      ->simplePagination(5);
    $param = [
      'items' => $items,
      'sort' => $sort,
      'user' => $user,
    ];
    return view('hello.index', $param);
  }

  public function post(Request $request) {
    $items = DB::select('select * from people');
    return view('hello.index', ['items' => $items]);
  }

  public function add(Request $request) {
    return view('hello.add');
  }

  public function create(Request $request) {
    $param = [
      'name' => $request->name,
      'mail' => $request->mail,
      'age' => $request->age,
    ];
    DB::table('people')->insert($param);
    return redirect('/hello');
  }

  public function edit(Request $request) {
    $item = DB::table('people')
      ->where('id', $request->id)
      ->first();
    return view('hello.edit', ['form' => $item]);
  }

  public function update(Request $request) {
    $param = [
      'name' => $request->name,
      'mail' => $request->mail,
      'age' => $request->age,
    ];
    DB::table('people')
      ->where('id', $request->id)
      ->update($param);
    return redirect('/hello');
  }

  public function del(Request $request) {
    $item = DB::table('people')
      ->where('id', $request->id)
      ->first();
    return view('hello.del', ['form' => $item]);
  }

  public function remove(Request $request) {
    DB::table('people')
      ->where('id', $request->id)
      ->delete();
    return redirect('/hello');
  }

  public function show(Request $request) {
    $page = $request->page;
    $items = DB::table('people')
      ->offset($page * 3)
      ->limit(3)
      ->get();
    return view('hello.show', ['item' => $item]);
  }

  public function rest(Request $request) {
    return view('hello.rest');
  }

  public function ses_get(Request $request) {
    $sesdata = $request->session()->get('msg');
    return view('hello.session', ['session_data' => $sesdata]);
  }

  public function ses_put(Request $request) {
    $msg = $request->input;
    $request->session()->put('msg', $msg);
    return redirect('hello/session');
  }

  public function getAuth(Request $request) {
    $param = ['message' => 'ログインして下さい。'];
    return view('hello.auth', $param);
  }

  public function postAuth(Request $request) {
    $email = $request->email;
    $password = $request->password;
    if (Auth::attempt([
      'email' => $email,
      'password' => $password
    ])) {
      $msg = 'ログインしました。（' . Auth::user()->name . '）';
    } else {
      $msg = 'ログインに失敗しました。';
    }
    return view('hello.auth', ['message' => $msg]);
  }
}
