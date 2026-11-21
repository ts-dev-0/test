<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>書籍編集結果</title>
</head>
<body>
  <h1>以下の書籍の編集を行いました</h1>
  <p>書籍名: {{$book['title']}}</p>
  <p>書籍名: {{$book['author'] ?? '未登録'}}</p>
  <p>書籍名: {{$book['publisher'] ?? '未登録'}}</p>
  <p>書籍名: {{$book['isbn'] ?? '未登録'}}</p>
  <p>書籍名: {{$book['published_date'] ?? '未登録'}}</p>
  <p>書籍名: {{$book['description'] ?? '未登録'}}</p>
  <p>書籍名: {{$book['thumbnail'] ?? '未登録'}}</p>
  <a href="/admin/books/edit">書籍検索ページ戻る</a>
</body>
</html>