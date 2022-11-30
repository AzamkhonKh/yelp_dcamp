<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
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
Route::post(
    'organisation', 
    [OrganisationController::class, 'store']
)->name('organisation.store');
Route::delete(
    'organisation/{id}', 
    [OrganisationController::class, 'destroy']
)->name('organisation.delete');
Route::patch(
    'organisation/edit/{id}', 
    [OrganisationController::class, 'edit']
)->name('organisation.edit');
Route::patch(
    'organisation/attach_category/{id}', 
    [OrganisationController::class, 'attach_category']
)->name('organisation.attach_category');

Route::put(
    'organisation/edit/{id}', 
    [OrganisationController::class, 'edit']
)->name('organisation.edit');

Route::apiResource('categories', CategoriesController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
