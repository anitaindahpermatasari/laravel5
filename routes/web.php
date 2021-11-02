<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\FamilysController;
use App\Http\Controllers\GroupsController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Str;
// use Illuminate\Routing\ResourceRegistrar;
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

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('coba');
});
// karena di dalam coba controller, function coba juga memanggil urutan sehingga dalam routes harus memanggil coba dan angka

Route::get('/coba/{no}', function ($no) {
    return 'Coba ke- '. $no;
});

Route::get('/home', [App\Http\Controllers\CobaController::class, 'coba']);
// karena belum menyertakan controller untuk route coba jadi tidak bisa langsung return value tapi haus melakukan pemanggilan controller
Route::get('/test', [App\Http\Controllers\CobaController::class, 'index']);
Route::get('/test/{ke}', [App\Http\Controllers\CobaController::class, 'urutan']); */

Route::get('', [App\Http\Controllers\CobaController::class, 'index']);
/* Route::get('/friends', [App\Http\Controllers\CobaController::class, 'index']);
Route::get('/friends/create', [App\Http\Controllers\CobaController::class, 'create']);
Route::post('/friends', [App\Http\Controllers\CobaController::class, 'store']);
Route::get('/friends/{id}', [App\Http\Controllers\CobaController::class, 'show']);
Route::get('/friends/{id}/edit', [App\Http\Controllers\CobaController::class, 'edit']);
Route::put('/friends/{id}', [App\Http\Controllers\CobaController::class, 'update']);
Route::delete('/friends/{id}', [App\Http\Controllers\CobaController::class, 'destroy']); */

/* Route::get('/familys', [App\Http\Controllers\FamilysController::class, 'index']);
Route::get('/familys/create', [App\Http\Controllers\FamilysController::class, 'create']);
Route::post('/familys', [App\Http\Controllers\FamilysController::class, 'store']);
Route::get('/familys/{id}', [App\Http\Controllers\FamilysController::class, 'show']);
Route::get('/familys/{id}/edit', [App\Http\Controllers\FamilysController::class, 'edit']);
Route::put('/familys/{id}', [App\Http\Controllers\FamilysController::class, 'update']);
Route::delete('/familys/{id}', [App\Http\Controllers\FamilysController::class, 'destroy']); */

/* Route::get('/groups', [App\Http\Controllers\GroupsController::class, 'index']);
Route::get('/groups/create', [App\Http\Controllers\GroupsController::class, 'create']);
Route::post('/groups', [App\Http\Controllers\GroupsController::class, 'store']);
Route::get('/groups/{id}', [App\Http\Controllers\GroupsController::class, 'show']);
Route::get('/groups/{id}/edit', [App\Http\Controllers\GroupsController::class, 'edit']);
Route::put('/groups/{id}', [App\Http\Controllers\GroupsController::class, 'update']);
Route::delete('/groups/{id}', [App\Http\Controllers\GroupsController::class, 'destroy']); */

Route::resources([
    'friends' => App\Http\Controllers\CobaController::class,
    'familys' => App\Http\Controllers\FamilysController::class,
    'groups' => App\Http\Controllers\GroupsController::class,
]);
