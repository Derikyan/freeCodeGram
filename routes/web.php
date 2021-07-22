<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NewUserWelcomeMail;
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



Auth::routes();
// Route::get('/p', function () {
//     return view("posts/create");
// });

Route::get('/email',function(){
    return new NewUserWelcomeMail();
});

Route::get('/','PostsController@index');

Route::post('follow/{user}', 'FollowsController@store');

Route::prefix('p')->group(function () {
    Route::get('/create','PostsController@create');
    Route::post('/', 'PostsController@store');
    Route::get('/{post}', 'PostsController@show');
});

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');