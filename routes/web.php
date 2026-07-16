<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\PageController;

use App\Http\Controllers\ClienteController;

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\ImageController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

Route::get('/', [PageController::class, 'blog'])->name('blog');

Route::get('publicaciones/{slug}', [PageController::class, 'post'])->name('post');

Route::get('publicaciones', [PageController::class, 'posts'])->name('posts');

Route::get('categoria/{slug}', [PageController::class, 'category'])->name('category');

Route::get('tag/{slug}', [PageController::class, 'tag'])->name('tag');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//*******Administración
Route::get('/admin',    [PageController::class, 'admin'])->name('admin');

Route::resource('tags', TagController::class);
Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);


Route::resource('images', ImageController::class);


//*******clientesSatisfechos
Route::get('/clientesformulario',   [PageController::class, 'formularioclientes'])->name('formularioclientes');
Route::post('/sendemail/send', [PageController::class, 'send']);
//Route::post('/sendemail/send','SendEmailController@send');

Route::post('/sendemail/sendContact', [PageController::class, 'sendContact']);

Route::resource('clientes', ClienteController::class);