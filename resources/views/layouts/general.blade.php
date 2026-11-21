<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | 社員ページ</title>
</head>
<body>
    <header>
        <h1>書籍管理システム</h1>

        <nav>
            <a href="/">トップページ</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>