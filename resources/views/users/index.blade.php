<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>社員一覧ページ</title>
</head>
  <body>
    <h1>社員一覧ページ</h1>
    @forelse ($users as $user)
        <div>
            <p>社員名: {{ $user->name }}</p>
            <p>メールアドレス: {{ $user->email }}</p>
            <p>権限: {{ $user->role }}</p>
        </div>
    @empty
        <p>現在、登録されている社員はいません。</p>
    @endforelse
</body>
</html>