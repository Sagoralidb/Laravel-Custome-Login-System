<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[HomeController::class,'homepage'])->name('homepage');


// Route::get('/admin/dashboard', function () {
//     // অ্যাডমিন ড্যাশবোর্ড
// })->middleware('admin');

Route::middleware(['admin'])->group(function(){
    route::get('/post-create',[DashboardController::class,'create'])->name('post.create');
    
    Route::post('/logout', function () {
            Auth::logout();
            return redirect('/');
        })->name('logout');

} ) ;

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/home',[HomeController::class,'index'])->name('admin.home');
});

require __DIR__.'/auth.php';
