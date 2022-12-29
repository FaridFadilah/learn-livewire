<?php

use App\Http\Livewire\Discover;
use App\Http\Livewire\Home;
use App\Http\Livewire\Form\Contact;
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

Route::get('/', Home::class);
Route::get('/discover', Discover::class);
Route::get('/contact', Contact::class);