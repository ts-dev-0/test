<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>書籍削除</title>
</head>
<body>
  <h1>以下の書籍を削除しました</h1>
  <p>書籍名: {{$book['title']}}</p>
  <p>著者: {{$book['author'] ?? '未登録'}}</p>
  <p>出版社: {{$book['publisher'] ?? '未登録'}}</p>
  <p>ISBN: {{$book['isbn'] ?? '未登録'}}</p>
  <p>出版日: {{$book['published_date'] ?? '未登録'}}</p>
  <p>書籍説明: {{$book['description'] ?? '未登録'}}</p>
  <p>書籍画像: {{$book['thumbnail'] ?? '未登録'}}</p>
  <a href="/admin/books/erase">書籍検索ページ戻る</a>
</body>
</html>