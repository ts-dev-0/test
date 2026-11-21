<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>トップページ</title>
</head>
<body>
  <header>
    <a href="/admin/users/create">管理者画面</a>
    <form action="/books/search" method="get">
      <input type="text" name="keyword">
      <input type="submit" value="検索">
    </form>
  </header>
  <main>
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
  </main>
</body>
</html>