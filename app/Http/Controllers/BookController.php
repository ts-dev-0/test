<?php

namespace App\Http\Controllers;

use App\Services\BookService;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function search(BookService $bookService)
    {
        $books = $bookService->searchBooks('laravel');

        return view('welcome');
    }
}
