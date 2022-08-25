<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/ 

 Route::get('/', [\App\Http\Controllers\BlogPostController::class, 'index']);
Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);
Route::get('/category/{category}', [\App\Http\Controllers\BlogPostController::class, 'category']);
//Route::get('/', [\App\Http\Livewire\Pagination::class,'render']);


/* Frontend Route */



/*
|--------------------------------------------------------------------------
| Back Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function(){
    Route::get('panel','App\Http\Controllers\Back\Dashboard@index')->name('dashboard');
    Route::get('cikis','App\Http\Controllers\Back\Auths@logout')->name('logout');
    Route::resource('makaleler','App\Http\Controllers\Back\ArticleController');
    Route::get('/deletearticle/{id}','App\Http\Controllers\Back\ArticleController@delete')->name('delete.article');

});

Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function(){

    Route::get('giris','App\Http\Controllers\Back\Auths@login')->name('login');
    Route::post('giris','App\Http\Controllers\Back\Auths@loginPost')->name('login.post');
});