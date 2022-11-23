<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\TeachingController;
use App\Models\Organisation;
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

Route::get(
    '/organisation', 
    [OrganisationController::class, 'index']
)->name('organisation');
Route::get(
    '/teaching', 
    [TeachingController::class, 'open_teaching']
)->name('teaching');
Route::get(
    '/we-practice', 
    [TeachingController::class, 'do_some_practice']
)->name('practice');

Route::get('/dashboard', function () {
    $org = Organisation::all();
    return view('dashboard',[
        'organisation' => $org
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');
Route::patch(
        'organisation/edit/{id}', 
        [OrganisationController::class, 'edit']
    )->name('organisation.edit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
