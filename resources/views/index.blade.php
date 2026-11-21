@extends('layouts.general')
@section('title', 'トップページ')
    
@section('content')
<h1>トップページ</h1>
@forelse ($books as $book)
<div>
    <p>{{ $book['title'] }}</p>
    <p>{{ $book['author'] ?? '未登録' }}</p>
    <p>{{ $book['publisher'] ?? '未登録' }}</p>
    <p>{{ $book['isbn'] ?? '未登録' }}</p>
    <p>{{ $book['published_date'] ?? '未登録' }}</p>
    <p>{{ $book['description'] ?? '未登録' }}</p>
    <p>{{ $book['thumbnail'] ?? '未登録' }}</p>
    <a href="/books/{{ $book['id'] }}">詳細画面へ</a>
</div>
@empty
<h1>書籍は登録されていません</h1>
@endforelse
@endsection
