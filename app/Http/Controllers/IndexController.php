<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function  index()
    {
        $books = Book::all();
        $data = [
            'books' => $books
        ];
        return view('index', $data);
    }
}
