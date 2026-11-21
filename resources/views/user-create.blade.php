<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>社員登録ページ</title>
</head>
<body>
  <h1>社員登録ページ</h1>
  <form action="/admin/users/store" method="POST">
    <div>
      <label for="name">社員名</label>
      <input type="text" name="name" required>
    </div>
    <div>
      <label for="email">メールアドレス</label>
      <input type="email" name="email" required>
    </div>
    <div>
      <label for="password">パスワード</label>
      <input type="password" name="password" required>
    </div>
    <div>
      <label for="password_confirmation">パスワード(確認)</label>
      <input type="password" name="password_confirmation" required>
    </div>
    <div>
      <label for="role">権限</label>
      <select name="role" id="role" required>
          <option value="general">一般社員</option>
          <option value="admin">管理者</option>
      </select>
    </div>
    <br>
    <input type="submit" value="社員を追加する">
  </form>
</body>
</html>