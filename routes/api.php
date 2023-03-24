<?php

declare(strict_types=1);

use App\Http\Middleware\UserProfileUpdateAccess;
use App\Http\Controllers\Api\Posts\{PostsDestroyController, PostsIndexController, PostsShowController, PostsStoreController, PostsUpdateController};
use App\Http\Controllers\Api\Users\{UserUpdateController, UserEditController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware(UserProfileUpdateAccess::class)->group(function () {
        Route::get('/{user}/edit', UserEditController::class);
        Route::get('/{user}/save', UserUpdateController::class);
});

Route::middleware(['cache.headers:public;max_age=60;etag'])->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('/login', 'LoginController@getLogin')->name('user.login');
        Route::post('/login', 'LoginController@authenticate')->name('user.authenticate');
    });
});
