<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>書籍削除ページ</title>
</head>
<body>
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
</body>
</html>