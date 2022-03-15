<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminute\Http\Jissyu4_3Request;

class Jissyu4_3Controller extends Controller
{
    public function index()
    {
        $data = [
            'msg'=>'必要事項を記入してください。',
        ];
        return view('jissyu4_3.input', $data);
    }

    public function post(Jissyu4_3Request $request)
    {
        //全データの取得
        $data = $request->all();

        return view('jissyu4_3.output', ['data' => $data]);
    }


}
