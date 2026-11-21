@extends('layouts.admin')

@section('title', '書籍編集ページ')

@section('content')
    
<h1>書籍編集ページ</h1>
@if (@isset($book))
<form action="/admin/books/update" method="POST">
  <input type="hidden" name="id" value="{{ $book->id }}">
  <label for="title">
    書籍名:
    <input type="text" name="title" value="{{ $book->title }}">
  </label>
  <br>
  <label for="author">
    著者名:
    <input type="text" name="author" value="{{ $book->author }}">
  </label>
  <br>
  <label for="publisher">
    出版社:
    <input type="text" name="publisher" value="{{ $book->publisher }}">
  </label>
  <br>
  <label for="isbn">
    ISBN:
    <input type="text" name="isbn" value="{{ $book->isbn }}">
  </label>
  <br>
  <label for="published_date">
    出版日:
    <input type="text" name="published_date" value="{{ $book->published_date }}">
  </label>
  <br>
  <label for="description">
    説明:
    <textarea name="description" id="description" cols="30" rows="10">
      {{ $book->description }}
    </textarea>
  </label>
  <br>
  <label for="thumbnail">
    画像:
    <input type="file" name="thumbnail" value="{{ $book->thumbnail }}">
  </label>
  <br>
  <input type="submit" value="書籍更新">
</form>
@else
  <form action="/admin/books/edit" method="POST">
    <label for="id">書籍ID</label>
    <input type="number" name="id" required autofocus>
    <input type="submit" value="書籍検索">
  </form>
@endif
@endsection
