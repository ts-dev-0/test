<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class BookService
{
    private const API_URL = 'https://www.googleapis.com/books/v1/volumes';

    public function searchBooks(string $keyword): array
    {
        $response = Http::get(self::API_URL, [
            'q' => $keyword,
            'maxResults' => 10,
            'key' => config('services.google_books.api_key'),
        ]);

        $response->throw();

        return $response->json()['items'] ?? [];
    }
}