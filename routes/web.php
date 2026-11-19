<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookSearchController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserDeleteController;
use App\Http\Controllers\UserEditController;
use Illuminate\Support\Facades\Route;


// 一般社員・総務部社員共通
Route::get('/', [IndexController::class, 'show']);
// 書籍検索
Route::get('/books/search', [BookSearchController::class, 'search']);
// 書籍詳細
Route::get('/books/{book}', [BookDetailController::class, 'show']);


// 総務部社員専用
Route::prefix('admin')
  ->group(function () {
    // 書籍関係

    // 書籍一覧
    Route::get('/books', [BookListController::class, 'index'])
      ->name('books.index');

    // 書籍追加
    Route::get('/books/create', [BookCreateController::class, 'create']);
    Route::post('/books', [BookCreateController::class, 'store']);

    // 書籍編集
    Route::get('/books/{book}/edit', [BookEditController::class, 'edit']);
    Route::put('/books/{book}', [BookEditController::class, 'update']);

    // 書籍削除
    Route::delete('/books/{book}', [BookDeleteController::class, 'destroy']);

    // 社員関係

    // 社員一覧
    Route::get('/users', [UserListController::class, 'index']);

    // 社員登録
    Route::get('/users/create', [UserCreateController::class, 'create']);
    Route::post('/users', [UserCreateController::class, 'store']);

    // 社員編集
    Route::get('/users/{user}/edit', [UserEditController::class, 'edit']);
    Route::put('/users/{user}', [UserEditController::class, 'update']);

    // 社員削除
    Route::delete('/users/{user}', [UserDeleteController::class, 'destroy']);
  });
