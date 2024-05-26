<?php

use App\Events\NewsHidden;
use App\Models\News;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('news/create-test', function () {
    $news=new \App\Models\News();
    $news->title='Test new title';
    $news->body='Test news body';

    $news->save();
    return $news;
});
Route::get('news/{id}/hide', function ($id) {
    $news=News::findOrFail($id);
    $news->hidden = true;
    $news->save();
    NewsHidden::dispatch($news);


    return 'News hidden';
});
