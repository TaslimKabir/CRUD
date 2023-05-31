<?php

use App\Http\Controllers\DonateController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Psy\Readline\HoaConsole;

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

Route :: get('/', [HomeController ::class, 'home'])->name('home');
Route :: get('/add', [HomeController ::class, 'addProduct'])->name('addProduct');
Route :: get('/view', [HomeController ::class, 'viewProduct'])->name('viewProduct');

Route :: get('/donate', [DonateController ::class, 'index'])->name('donateProduct');

Route :: get('/details{id}', [HomeController ::class, 'details'])->name('details');
Route :: get('/delete{id}', [HomeController ::class, 'delete'])->name('delete');

Route :: post('/recinfo', [HomeController ::class, 'recinfo'])->name('recinfo');