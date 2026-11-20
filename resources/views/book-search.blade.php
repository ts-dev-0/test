<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>書籍検索結果</title>
</head>
<body>
  <h1>書籍検索結果</h1>
  
  <h2>検索キーワード: {{ $keyword }}</h2>
  
  @foreach ($books as $book)
  <div>
    <p>{{$book['title']}}</p>
    <p>{{$book['author']  ?? '未登録'}}</p>
    <p>{{$book['publisher']  ?? '未登録'}}</p>
    <p>{{$book['isbn']  ?? '未登録'}}</p>
    <p>{{$book['description']  ?? '未登録'}}</p>
    <p>{{$book['thumbnail']  ?? '未登録'}}</p>
  </div>
  {{-- TODO: 認証を導入後、roleによって削除ボタンの表示を切り分ける --}}
  <form action="/books/{{ $book['id'] }}" method="post">
    <input type="submit" value="削除画面へ">
  </form>
  @endforeach
</body>
</html>