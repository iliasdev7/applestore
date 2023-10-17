<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;

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

//the homepage route 

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

//the announcements route 
Route::get('/new/announcement',[AnnouncementController::class, 'createAnnouncement'])->middleware('auth')->name('announcements.create');