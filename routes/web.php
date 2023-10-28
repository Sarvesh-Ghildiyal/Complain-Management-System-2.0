<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|  {{$slot}}
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// User CRUD Routes

Route::middleware(['user'])->prefix('complaint')->group(function () {
    
    // Fill complain
   Route::view('fill','user.fillComplain')->name('user.fillComp');
   Route::post('fill',[ComplainController::class, 'store'])->name('user.storeComp');

    // View Complain
    Route::get('view',[ComplainController::class, 'index'])->name('user.viewComp');
    Route::get('show/view/{complain}',[ComplainController::class, 'show'])->name('user.showComp');
    
    // Edit Complain
    Route::get('edit',[ComplainController::class, 'index'])->name('user.editViewComp');
    Route::get('show/edit/{complain}',[ComplainController::class, 'show'])->name('user.editShowComp');
    Route::post('show/edit/{complain}',[ComplainController::class, 'update'])->name('user.editUpdateComp');
    
    
});







// ADMIN ROUTES
Route::get('/home',[HomeController::class,'index'])
    ->middleware(['auth','verified'])->name('home');
