<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>社員データ編集ページ</title>
</head>
<body>
  <h1>社員データ編集ページ</h1>
  @if (@isset($user))
  <form action="/admin/users/update" method="POST">
    <input type="hidden" name="id" value="{{ $user->id }}">
    <label for="name">
      社員名:
      <input type="text" name="name" value="{{ $user->name }}">
    </label>
    <br>
    <label for="email">
      メールアドレス:
      <input type="email" name="email" value="{{ $user->email }}">
    </label>
    <br>
    <div>
      <label for="role">権限</label>
      <select name="role" id="role" required>
          <option value="general">一般社員</option>
          <option value="admin">管理者</option>
      </select>
    </div>
    <input type="submit" value="社員情報更新">
  </form>
  @else
    <form action="/admin/users/edit" method="POST">
      <label for="id">社員ID</label>
      <input type="number" name="id" required autofocus>
      <input type="submit" value="社員検索">
    </form>
  @endif
</body>
</html>