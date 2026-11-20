<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookSearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $_GET['keyword'];
        // TODO: 書籍名以外でも検索できるようにする
        $books = Book::where('title', 'LIKE', `%{$keyword}%`)->get();
        
        $data = [
            'books' => $books,
            'keyword' => $keyword
        ];

        return view('book-search', $data);
    }
}
