<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookDeleteController extends Controller
{
    public function erase(Request $request) {
        
        if ($request->isMethod('get')) {
            return view('book-erase');
        }

        $bookId = $request->input('id');
        $bookData = Book::find($bookId);
        $data = [
            'book' => $bookData
        ];
        return view('book-erase', $data);
    }

    public function delete(Request $request) {
        $validatedData = $request->validate([
            'id' => 'required | exists:books,id',
        ]);

        $book = Book::find($validatedData['id']);
        $book->delete();
        $data = [
            'book' => $book
        ];

        return view('book-delete', $data);
    }
}
