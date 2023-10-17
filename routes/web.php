<?php
use App\Http\Controllers\BolsaController;
use App\Http\Controllers\ContactController;
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
    return view('index');
})->name('/');



Route::get('/inbound', function () {
    return view('inbound');
})->name('inbound');


Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');


Route::get('/reclutamiento', function () {
    return view('reclutamiento');
})->name('reclutamiento');


Route::get('/call', function () {
    return view('call');
})->name('call');


Route::get('/btl', function () {
    return view('btl');
})->name('btl');

Route::get('/bolsa', function () {
    return view('bolsa');
})->name('bolsa');


Route::post('contact/send', [ContactController::class, 'send'])->name('contact.post');

Route::post('bolsa/send', [BolsaController::class, 'send'])->name('bolsa.post');
