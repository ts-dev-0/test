<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookDetailController extends Controller
{
    public function show(Book $book)
    {
        $data = [
            'book' => $book,
            'comments' => $book->comments()->with('user')->get(),
        ];

        return view('book-detail', $data);
    }
}
