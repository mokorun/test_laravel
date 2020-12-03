<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //aa
    public function index()
    {
        $books = DB::select('select * from test_table');
        $data = ['msg' => '本一覧', 'books' => $books];
        return view('book.index', $data);
    }
}
