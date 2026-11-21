@extends('layouts.admin')

@section('title', '書籍削除ページ')

@section('content')
  <h1>書籍削除ページ</h1>
  @if (@isset($book))
  <p>書籍名: {{$book['title']}}</p>
  <p>書籍名: {{$book['author'] ?? '未登録'}}</p>
  <p>書籍名: {{$book['publisher'] ?? '未登録'}}</p>
  <p>書籍名: {{$book['isbn'] ?? '未登録'}}</p>
  <p>書籍名: {{$book['published_date'] ?? '未登録'}}</p>
  <p>書籍名: {{$book['description'] ?? '未登録'}}</p>
  <p>書籍名: {{$book['thumbnail'] ?? '未登録'}}</p>
  <form action="/admin/books/delete" method="post">
    <input type="hidden" name="id" value="{{ $book['id'] }}">
    <input type="submit" value="書籍を削除">
  </form>
  @else
    <form action="/admin/books/erase" method="POST">
      <label for="id">書籍ID</label>
      <input type="number" name="id" required autofocus>
      <input type="submit" value="書籍検索">
    </form>

  @endif
  
@endsection
