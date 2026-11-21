@extends('layouts.admin')

@section('title', '社員一覧ページ')
    @section('content')
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
    </main>
@endsection


