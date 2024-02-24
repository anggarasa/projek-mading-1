<?php

use App\Models\User;
use App\Models\Mading;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\MadingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuruUsersController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\GuruMadingController;
use App\Http\Controllers\AdminMadingsController;

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
    return view('page_one', [
        'murid' => User::where('role', 'MURID')->count(),
        'guru' => User::where('role', 'GURU')->count(),
    ]);
});

// Halaman public
Route::middleware(['auth', 'verified', 'aksesUser:MURID'])->group(function() {
    Route::resource('/mading', MadingController::class);

    Route::get('/teams', function() {
        return view('public.team', [
            'title' => "Development Teams"
        ]);
    });

    Route::get('/contact', function() {
        return view('public.contact', [
            'title' => "Contact"
        ]);
    });
});

// Halaman Admin
Route::middleware(['auth', 'aksesUser:ADMIN'])->group(function() {
    Route::get('/admin', function () {
        return view('admin.home_admin', [
            'title' => "Home",
            'murid' => User::where('role', 'MURID')->count(),
            'guru' => User::where('role', 'GURU')->count(),
            'admin' => User::where('role', 'ADMIN')->count(),
        ]);
    });

    // MADING
    Route::resource('/admin/madings', AdminMadingsController::class);

    // MURID
    Route::get('/admin/users/murid', [AdminUsersController::class, 'murid']);
    Route::get('/admin/users/murid/create', [AdminUsersController::class, 'createMurid']);
    Route::post('/admin/users/murid', [AdminUsersController::class, 'storeMurid']);

    // GURU
    Route::get('/admin/users/guru', [AdminUsersController::class, 'guru']);
    Route::get('/admin/users/guru/create', [AdminUsersController::class, 'createGuru']);
    Route::post('/admin/users/guru', [AdminUsersController::class, 'storeGuru']);

    // ADMIN
    Route::get('/admin/users/admin', [AdminUsersController::class, 'admin']);
    Route::get('/admin/users/admin/create', [AdminUsersController::class, 'createAdmin']);
    Route::post('/admin/users/admin', [AdminUsersController::class, 'storeAdmin']);

});

// Halaman Guru
Route::middleware(['auth', 'aksesUser:GURU'])->group(function() {
    Route::get('/guru', function() {
        return view('guru.home', [
            'title' => "Home",
        ]);
    });

    Route::resource('/guru/madings', GuruMadingController::class);

    Route::get('/guru/users/murid', function () {
        return view('guru.murid.index', [
            'title' => "Murid",
            'users' => User::where('role', 'MURID')->user(request(['search']))->get(),
            'jumlah' => User::where('role', 'MURID')->count()
        ]);
    });

    Route::resource('/guru/users', GuruUsersController::class);
});

// profile murid
Route::middleware(['auth', 'aksesUser:MURID'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// profile Guru
Route::middleware(['auth', 'aksesUser:GURU'])->group(function () {
    Route::get('/profile-guru', [ProfileController::class, 'editGuru']);
    Route::patch('/profile-guru', [ProfileController::class, 'updateGuru']);
    Route::delete('/profile-guru', [ProfileController::class, 'destroyGuru']);
});

Route::middleware(['auth', 'aksesUser:ADMIN'])->group(function () {
    Route::get('/profile-admin', [ProfileController::class, 'editAdmin']);
    Route::patch('/profile-admin', [ProfileController::class, 'updateAdmin']);
    Route::delete('/profile-admin', [ProfileController::class, 'destroyAdmin']);
});



require __DIR__.'/auth.php';
