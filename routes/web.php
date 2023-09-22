<?php

use App\Http\Controllers\FetchDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/datatables', [DataController::class, 'datatables']);
Route::get('/data-tables', [DataController::class, 'dataUserUser'])->name('data-users');

Route::get('/paginate', [DataController::class, 'paginate']);
Route::get('/data-paginate', [DataController::class, 'dataUserUser'])->name('data-users');
