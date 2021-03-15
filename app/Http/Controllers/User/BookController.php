<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //aa
    public function book()
    {
        $books = DB::select('select * from test_table');
        $data = ['msg' => '本一覧', 'books' => $books];
        return view('book.index', $data);
    }
}
