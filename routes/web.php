<?php

use App\Http\Controllers\EnsaController;

use App\Http\Controllers\EspController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Authenticate;
use App\Models\Candidate;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

   


Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';


Route::resource('concours',EnsaController::class);
Route::resource('candidates',CandidateController::class);
Route::get('/candidates', [CandidateController::class, 'show'])->name('candidates.index');


Route::get('/results/written', [CandidateController::class, 'publishWrittenResults'])->name('results.written');
Route::get('/results/oral', [CandidateController::class, 'publishOralResults'])->name('results.oral');
Route::get('/results/final', [CandidateController::class, 'publishFinalResults'])->name('results.final');
Route::resource('C',EspController::class)->middleware('auth');
Route::get('/C', [EspController::class, 'in'])->name('concours.in')->middleware('auth');
