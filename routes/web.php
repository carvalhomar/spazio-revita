<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

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
// Load index page from PageController in the index method
Route::get('/',function (){
    return view('page.index');
})->name('home');
Route::get('/treatment/article/{id}/{title}', [ContentController::class, 'showContent']);
Route::get('/blog/article/{id}/{name}', [ContentController::class, 'showBlog']);

Route::get('/treatments/load', [ContentController::class, 'loadtreatment']);
Route::get('/health/load', [ContentController::class, 'loadHealth']);
Route::get('/blog/load', [ContentController::class, 'loadBlog']);

//Send e-mail
Route::resource('/send-email', MailController::class);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->name('dashboard');

Route::resource('usertype', UserTypeController::class);

Route::resource('user', UserController::class);
Route::post('/user/store', [UserController::class, 'store']);
Route::get('/user/load/{id}', [UserController::class, 'show']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/user/remove/{id}', [UserController::class, 'destroy']);

Route::get('/content', [ContentController::class, 'index']);

Route::get('/content/principal', function (){
    return view('dashboard.banner');
});

Route::get('/content/categories/load', [ContentController::class, 'loadCategories']);
Route::post('/content/blog/store', [ContentController::class, 'storeBlog']);
Route::get('/content/treatment', [ContentController::class, 'getTreatment']);
Route::post('/content/treatment/store', [ContentController::class, 'storeTreatment']);
Route::get('/content/treatment/load/{id}', [ContentController::class, 'show']);
Route::get('/content/blog/load/{id}', [ContentController::class, 'showB']);
Route::post('/content/treatment/remove/{id}', [ContentController::class, 'destroy']);
Route::post('/content/blog/remove/{id}', [ContentController::class, 'destroyBlog']);
Route::get('/content/treatment/edit/{id}', [ContentController::class, 'edit']);
Route::get('/content/blog/edit/{id}', [ContentController::class, 'editBlog']);
Route::get('/content/treatment/create', function(){
    return view('dashboard.treatment.form');
});

Route::post('/content/upload', [ContentController::class, 'uploadImages'])->name('ckeditor.upload');

Route::get('/content/health', [ContentController::class, 'getHealth']);
Route::get('/content/health/create', function(){
    return view('dashboard.health.form');
});
Route::get('/content/health/edit/{id}', [ContentController::class, 'editHealth']);

Route::get('/content/blog', [ContentController::class, 'getBlog']);
Route::get('/content/blog/create', function(){
    return view('dashboard.blog.form');
});
Route::get('/content/blog/edit/{id}', [ContentController::class, 'editBlog']);

Route::get('/login', function(){
   return view('dashboard.login');
})->name('login');

Route::post('/login/access', [LoginController::class, 'login'])->name('login.access');
Route::get('/login/logout', [LoginController::class, 'logout'])->name('logout');
