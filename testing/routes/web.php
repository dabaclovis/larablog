<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(PagesController::class)->group(function(){
    Route::get('/','index')->name('pages.index');
    Route::get('about','about')->name('pages.about');
    Route::get('contact','contact')->name('pages.contact');
    Route::get('policy','policy')->name('pages.policy');
});
// resource
Route::resource('articles', ArticleController::class);
// post controller
Route::controller(PostController::class)->group(function(){
    Route::get('posts','index')->name('posts.index');
    Route::get('posts/create','create')->name('posts.create');
    Route::post('post/store','store')->name('posts.store');
    Route::get('post/{post}','show')->name('posts.show');
    Route::get('post/{post}','edit')->name('posts.edit');
    Route::post('post/update', 'update')->name('posts.update');
});
