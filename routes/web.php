<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UniversiteController;
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


Route::get('/', [UniversiteController::class, 'alluniversitethree'])->name('accuiel');

route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/university/createUni', [UniversiteController::class, 'index'])->name('university.createUni');
route::post('/university/createUni', [UniversiteController::class, 'store'])->name('university.store');

route::get('/university/listeUni', [UniversiteController::class, 'alluniversite'])->name('university_page');

route::get('/university/listeUniUser', [UniversiteController::class, 'alluniversitetwo'])->name('university_pageUser');

Route::get('/university', function () {
    return view('/university.createUni');
})->name('university.createUni');

Route::delete('/university/{id}', [UniversiteController::class, 'delete'])->name('university.delete');
Route::put('/university/{id}', [UniversiteController::class, 'update'])->name('university.update');
Route::get('/university/{id}/editUni', [UniversiteController::class, 'edit'])->name('university.edit');
Route::get('/university/{id}/detailUni', [UniversiteController::class, 'oneUniversite'])->name('university.detail');


Route::get('/notation/{id}/addNote', [NotationController::class, 'oneUniversite'])->name('notation.addNote');
Route::get('/critere/createCritere', [NotationController::class, 'index'])->name('critere.create');
route::post('/critere/createCritere', [NotationController::class, 'store'])->name('critere.store');

Route::get('/critere', function () {
    return view('/critere.createCritere');
})->name('critere.createCritere');

route::get('/critere/listeCritere', [NotationController::class, 'allcritere'])->name('critere_page');

Route::delete('/critere/{id}', [UniversiteController::class, 'delete'])->name('critere.delete');
Route::put('/critere/{id}', [UniversiteController::class, 'update'])->name('critere.update');
Route::get('/critere/{id}/editCritere', [UniversiteController::class, 'edit'])->name('critere.edit');

require __DIR__.'/auth.php';


