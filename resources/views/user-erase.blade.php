<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>社員データ削除ページ</title>
</head>
<body>
  <h1>社員データ削除ページ</h1>
  @if (@isset($user))
  <p>社員名: {{$user['name']}}</p>
  <p>メールアドレス: {{$user['email']}}</p>
  <p>権限: {{$user['role'] }}</p>
  <form action="/admin/users/delete" method="POST">
    <input type="hidden" name="id" value="{{ $user['id'] }}">
    <input type="submit" value="社員データを削除">
  </form>
  @else
    <form action="/admin/users/erase" method="POST">
      <label for="id">社員ID</label>
      <input type="number" name="id" required autofocus>
      <input type="submit" value="社員情報検索">
    </form>
  @endif
</body>
</html>