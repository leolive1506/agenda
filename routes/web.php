<?php

use App\Http\Livewire\Pages\Agenda;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/agenda', Agenda::class)->middleware(['auth'])->name('agenda');

require __DIR__.'/auth.php';
