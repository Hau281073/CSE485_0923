<?php

use App\Http\Controllers\ArtworkController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
    // $data = 'Gigido';
    // return view('index', compact('data',$data));
});
Route::resource('artworks',ArtworkController::class);
