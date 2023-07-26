<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ListingController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //CLIENT 
    Route::prefix('client')->middleware('client')->group(function () {
        Route::resource('jobs', JobController::class);
        Route::delete('/jobs/{job}', [JobController::class, 'deleteConfirmed'])->name('jobs.deleteConfirmed');

        Route::prefix('applications')->group(function () {
            Route::get('/', [ApplicationController::class, 'index'])->name('applications.index');
            Route::get('/candidates/{user}', [ApplicationController::class, 'show'])->name('applications.view-candidate');
            Route::delete('/candidates/{user}', [ApplicationController::class, 'deleteConfirmed'])->name('applications.deleteConfirmed');
        });
    });
    Route::post('/apply/{user}', [ApplicationController::class, 'store'])->name('applications.store');
    Route::get('/job/search', [JobController::class, 'search'])->name('jobs.search');
});

Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/search', [WelcomeController::class, 'search'])->name('welcome.search');
Route::get('/myapplications', [ApplicationController::class, 'index'])->name('applications.index');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('categories.show');



require __DIR__ . '/auth.php';
