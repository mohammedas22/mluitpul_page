<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoobController;
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

Route::prefix('Doob')->group(function(){
    Route::get('index', [DoobController::class , 'index'])->name('index');
    Route::get('contact', [DoobController::class , 'contact'])->name('contact');
    Route::get('about_us', [DoobController::class , 'about_us'])->name('about_us');
    Route::get('services', [DoobController::class , 'services'])->name('indeservicesx');
    Route::get('portfolio', [DoobController::class , 'portfolio'])->name('portfolio');
    Route::get('blog', [DoobController::class , 'blog'])->name('blog');
    Route::post('contact', [DoobController::class, 'postcontact'])->name('postcontact');
});

Route::get('masters', function () {
    return view('Doob.masters');
});


