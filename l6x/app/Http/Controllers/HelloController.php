<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
  public function index(Request $request)
  {
    $item = DB::select('select * form people');
      return view('hello.index',['items'=>$items]);
  }
  public function post(Request $request)
  {
    $validate_rule =[
      'msg'=>'required',
    ];
    $this->validate($request,$validate_rule);
    $msg = $request->msg;
    $response = response()->view('hello.index',['msg'=>'['.$msg.'」クッキーに保存しました。']);
    $reaponse->cookie('msg',$msg,100);
    return view('hello.index',['msg'=>'正しく入力されました。']);
  }
}