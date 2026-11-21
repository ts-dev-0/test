@extends('layouts.general')

@section('title', '書籍詳細ページ')

@section('content')
    
<h1>書籍詳細ページ</h1>

<h2>{{ $book['title']}}</h2>
<p>書籍名: {{ $book['author'] ?? '未登録'}}</p>
<p>著者: {{ $book['publisher'] ?? '未登録'}}</p>
<p>ISBN: {{ $book['isbn'] ?? '未登録'}}</p>
<p>公開日: {{ $book['published_date'] ?? '未登録'}}</p>
<p>書籍説明: {{ $book['description'] ?? '未登録'}}</p>
<p>画像: {{ $book['thumbnail'] ?? '未登録'}}</p>

<hr>
<h2>以下は書籍に対するコメントになります</h2>

@foreach ($comments as $comment)
<div>
  <p>内容</p>
  <p>{{ $comment->content}}</p>
  <p>{{$comment->user->name}}</p>
</div>
@endforeach
@endsection