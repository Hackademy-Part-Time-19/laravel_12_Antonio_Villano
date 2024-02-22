<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\CheckArticlePermissions;
use App\Models\Category;
use Illuminate\Auth\Middleware\Authenticate;

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

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/articles/filter/{category}', [ArticleController::class, 'byCategory'])->name('articles.byCategory');

Route::middleware('auth')->group(function () {

    Route::resource('articles', ArticleController::class)->except(['index', 'show']);
    Route::get('user/profile', function () {

        return view('user.settings');
    });
});
Route::resource('articles', ArticleController::class)->only(['edit','update'])->middleware(CheckArticlePermissions::class);
Route::resource('articles', ArticleController::class)->only(['index', 'show']);
Route::resource( 'categories', CategoryController::class,);

Route::get('user/articles',[ArticleController::class,'showUser'])->name('user.articles');
