<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TagController;
use App\Models\About;
use App\Models\Presentation;
use App\Models\Projet;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
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
    $presentations = Presentation::all();
    $abouts = About::all();
    $skills = Skill::all();
    $projets = Projet::all();
    return view('welcome',compact('presentations','abouts','skills','projets'));
});

Route::resource('presentation', PresentationController::class);

Route::resource('about', AboutController::class);

Route::resource('skill', SkillController::class);

Route::resource('projet', ProjetController::class);

Route::resource('tag', TagController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
