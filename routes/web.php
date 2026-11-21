<?php

use App\Http\Controllers\BookCreateController;
use App\Http\Controllers\BookDeleteController;
use App\Http\Controllers\BookDetailController;
use App\Http\Controllers\BookEditController;
use App\Http\Controllers\BookListController;
use App\Http\Controllers\BookSearchController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserCreateController;
use App\Http\Controllers\UserDeleteController;
use App\Http\Controllers\UserEditController;
use App\Http\Controllers\UserListController;
use Illuminate\Support\Facades\Route;


// 一般社員・総務部社員共通
Route::get('/', [IndexController::class, 'index']);
// 書籍検索
Route::get('/books/search', [BookSearchController::class, 'search']);
// 書籍詳細
Route::get('/books/{book}', [BookDetailController::class, 'show']);


// 総務部社員専用
Route::prefix('admin')
  ->group(function () {
    // 書籍関係

    // 書籍追加
    Route::get('/books/create', [BookCreateController::class, 'create']);
    Route::post('/books/store', [BookCreateController::class, 'store']);

    // 書籍編集
    Route::get('/books/edit', [BookEditController::class, 'edit']);
    Route::post('/books/edit', [BookEditController::class, 'edit']);

    Route::post('/books/update', [BookEditController::class, 'update']);

    // 書籍削除
    Route::get('/books/erase', [BookDeleteController::class, 'erase']);
    Route::post('/books/erase', [BookDeleteController::class, 'erase']);
    Route::post('/books/delete', [BookDeleteController::class, 'delete']);

    // 社員関係

    // 社員一覧
    Route::get('/users', [UserListController::class, 'index']);

    // 社員登録
    Route::get('/users/create', [UserCreateController::class, 'create']);
    Route::post('/users/store', [UserCreateController::class, 'store']);

    // 社員編集
    Route::get('/users/edit', [UserEditController::class, 'edit']);
    Route::post('/users/edit', [UserEditController::class, 'edit']);
    Route::post('/users/update', [UserEditController::class, 'update']);

    // 社員削除
    Route::get('/users/erase', [UserDeleteController::class, 'erase']);
    Route::post('/users/erase', [UserDeleteController::class, 'erase']);
    Route::post('/users/delete', [UserDeleteController::class, 'delete']);
  });
