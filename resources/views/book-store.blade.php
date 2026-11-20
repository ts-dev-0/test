<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>書籍追加完了ページ</title>
</head>
<body>
  <h1>書籍追加完了ページ</h1>
  <h2>以下の書籍を登録しました</h2>
  <p>{{$book['title']}}</p>
  <p>{{$book['author'] ?? '未登録'}}</p>
  <p>{{$book['publisher'] ?? '未登録'}}</p>
  <p>{{$book['isbn'] ?? '未登録'}}</p>
  <p>{{$book['published_date'] ?? '未登録'}}</p>
  <p>{{$book['description'] ?? '未登録'}}</p>
  <p>{{$book['thumbnail'] ?? '未登録'}}</p>
  <br>
  <a href="/admin/books/create">書籍登録ページに戻る</a>
</body>
</html>