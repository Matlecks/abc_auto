<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;

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
/*
email: admin@admin.com
password: password
*/
/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [MainPageController::class, 'index'])->name('index'); // главная старница

/* Route::group(['prefix' => 'admin'], function () {

    Route::post('/set_pagination_{page}', [PaginationService::class, 'setPagination'])->name('set_pagination');
}); */


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
