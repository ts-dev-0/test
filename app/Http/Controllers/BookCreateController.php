<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookCreateController extends Controller
{
    public function create()
    {
        return view('book-create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required | string | min:1 | max:100',
            'author' => 'nullable | string',
            'publisher' => 'nullable | string',
            'published_date' => 'nullable | date',
            'isbn' => 'nullable | string',
            'description' => 'nullable | string',
            'thumbnail' => 'nullable | string',
        ]);

        $book = new Book();
        $book->title = $validatedData['title'];
        $book->author = $validatedData['author'];
        $book->publisher = $validatedData['publisher'];
        $book->isbn = $validatedData['isbn'];
        $book->published_date = $validatedData['published_date'];
        $book->description = $validatedData['description'];
        $book->thumbnail = $validatedData['thumbnail'];

        $book->save();

        $data = [
            'book' => $validatedData,
        ];

        return view('book-store', $data);
    }
}
