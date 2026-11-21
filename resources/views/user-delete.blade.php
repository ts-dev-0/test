<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>社員データ削除</title>
</head>
<body>
  <h1>以下の社員データを削除しました</h1>
  <p>社員名: {{$user['name']}}</p>
  <p>メールアドレス: {{$user['email'] }}</p>
  <p>権限: {{$user['role']}}</p>
  <a href="/admin/users/erase">社員データ検索ページ戻る</a>
</body>
</html>