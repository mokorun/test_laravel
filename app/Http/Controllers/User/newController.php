<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class newController extends Controller
{
    //
    public function new ()
    {
        $hello = '記事新規作成ページ';
        $hello_array = ['Hello', 'こんにちは', '你好'];
        $selectOne = DB::select('select id,title from test_table where id=1', [1]);

        return view('new', compact('hello','hello_array', ['selectOne'=>$selectOne]));
    }
}
