<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jissyu4_2Controller extends Controller
{
    public function index()
    {
        $data = [
            'msg'=>'必要事項を記入してください。',
        ];
        return view('jissyu4_2.index', $data);
    }

    public function post(Request $request)
    {
        $rules = [
            'name' => 'required|max:10',
            'adress' => 'required|max:10',
            'login_id' => 'required|numeric|digits.between',
            'password' => 'required|between',
        ];
        $messages = [
            'name.required' => '名前は必ず入力して下さい。',
            'name.max' => '名前は10文字以内で入力して下さい。',
            'adress.required'  => '住所は必ず入力して下さい。',
            'adress.max'  => '住所は20文字以内で入力して下さい。',
            'login_id.required' => 'ログインIDは必ず入力して下さい。',
            'login_id.numeric' => 'ログインIDは数字で入力して下さい。',
            'login_id.digits_between' => 'ログインIDは8文字以上16文字以内で入力して下さい。',
            'password.required' => 'パスワードは必ず入力して下さい。',
            'password.between' => 'パスワードは8文字以上16文字以内で入力して下さい。',
        ];
        $validator = Validator::make($request->all());
        if ($validator->fails()) {
            return redirect('/jissyu4_2')
                ->withErrors($validator)
                ->withInput();
        }

        //全データの取得
        $data = $request->all();

        return view('jissyu4_2.output', ['data' => $data]);
    }
}