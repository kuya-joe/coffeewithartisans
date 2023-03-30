<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| GET /register (open) this registers without an api key
| GET /profile - view your profile (if loggedin)
| GET /profile/edit - Display edit profile form  
|
*/

Route::get('/', function () {
    return view('welcome ', ['message' => 'Hey Artisan']);
});

Route::get('/register', RegisterController::class);
