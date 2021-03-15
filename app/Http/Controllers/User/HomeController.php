<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index ()
    {
        /**
         * Show a list of all of the application's users.
         *
         * @return\Illuminate\Http\Response
         */

        $article_list = DB::select('select * from test_table', [1]);

//        $data = ['msg' => '本一覧', 'books' => $article_list];
//        return view('index', $data);
        return view('index', ['article_list' => $article_list]);

    }
}
