<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>社員データ編集結果</title>
</head>
<body>
  <h1>以下の社員データの編集を行いました</h1>
  <p>書籍名: {{$user['name']}}</p>
  <p>書籍名: {{$user['email']}}</p>
  <p>書籍名: {{$user['role'] }}</p>
  <a href="/admin/users/edit">社員検索ページ戻る</a>
</body>
</html>