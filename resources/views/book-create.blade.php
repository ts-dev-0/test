@extends('layouts.admin')
@section('title', '書籍追加ページ')

@section('content')
  <h1>書籍追加ページ</h1>
  <form action="/admin/books/store" method="POST">
    <div>
      <label for="title">書籍名</label>
      <input type="text" name="title">
    </div>
    <div>
      <label for="author">著者名</label>
      <input type="text" name="author">
    </div>
    <div>
      <label for="publisher">出版社</label>
      <input type="text" name="publisher">
    </div>
    <div>
      <label for="isbn">ISBN</label>
      <input type="text" name="isbn">
    </div>
    <div>
      <label for="published_date">出版日</label>
      <input type="text" name="published_date">
    </div>
    <div>
      <label for="description">説明文</label>
      <input type="text" name="description">
    </div>
    <div>
      <label for="thumbnail">書籍画像</label>
      <input type="text" name="thumbnail">
    </div>
    <br>
    <input type="submit" value="書籍を追加する">
  </form>
    
@endsection

