<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | 管理者ページ</title>
</head>
<body>
    <header>
        <h1>書籍管理システム（管理者）</h1>
        <a href="/">一般ページへ</a>
        <hr>
        <nav>
          <a href="/admin/users">社員一覧</a>
          <a href="/admin/books/create">書籍登録</a>
          <a href="/admin/books/edit">書籍編集</a>
          <a href="/admin/books/erase">書籍削除</a>
          <a href="/admin/users/create">社員データ登録</a>
          <a href="/admin/users/edit">社員データ編集</a>
          <a href="/admin/users/erase">社員データ削除</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>