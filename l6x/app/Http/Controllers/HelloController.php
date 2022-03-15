<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
  public function index(Request $request)
  {
      $items = DB::select('select * from people');
    return view ('hello.index',['items'=>$items]);
    }
  public function add(Request $request)
  {
   return view('hello.app');
  }
  public function post(Request $request)
  {
    $itmes = DB::select('select * from people');
    return view('hello.index',['items'=>$items]);
}
 public function create(Request $request)
 {
  $param = [
    'name' => $request->name,
    'mail' => $request->mail,
    'age' => $request->age,
  ];
  DB::insert('insert int peopele (name,mail,age) values (:name, :mail, :age)',$param);
  return redirect('/hello');
 }
  }