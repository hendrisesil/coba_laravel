<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentsController;


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
// dibawah ini adalah root awal laravel
// Route::get('/', function () {
//     // return view('welcome');
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'Hendricus Arfianto Maatita ST.';
//     return view('about', [
//         'nama' => $nama
//     ]);    
// });
Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);

// untuk mahasiswa kita tangani dengan controller khusus mahasiswa
Route::resource('/mahasiswa', MahasiswaController::class);

// untuk student kita tangani dengan controller khusus student
Route::resource('/students', StudentsController::class);
Route::resource('/students/posts', StudentsController::class);
