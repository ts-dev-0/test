<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>社員登録完了ページ</title>
</head>
<body>
  <h1>社員登録完了ページ</h1>
  <h2>以下の社員を登録しました</h2>
  <p>{{$user['name']}}</p>
  <p>{{$user['email'] }}</p>
  <p>{{$user['role'] }}</p>
  <br>
  <a href="/admin/users/create">社員登録ページに戻る</a>
</body>
</html>