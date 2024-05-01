<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\JamBukaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimoniController;
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

// Route for the home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route for the book table page
Route::get('book-table', [HomeController::class, 'bookTable'])->name('book-table');

// Group of routes that require authentication
Route::group(['middleware' => 'auth'], function () {

	Route::get('/login', function () {
		if (Auth::user()) {
			return redirect('/login');
		}
	
	})->name('dashboard');

	Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
	
	Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
	Route::post('/testimoni-store', [TestimoniController::class, 'store'])->name('testimoni-store');
	Route::post('/testimoni-update/{id}', [TestimoniController::class, 'update'])->name('testimoni-update');
	Route::get('/testimoni-delete/{id}', [TestimoniController::class, 'destroy'])->name('testimoni-delete');
	
	Route::get('/galery', [GaleryController::class, 'index'])->name('galery');
	Route::post('/galery-store', [GaleryController::class, 'store'])->name('galery-store');
	Route::post('/galery-update/{id}', [GaleryController::class, 'update'])->name('galery-update');
	Route::get('/galery-delete/{id}', [GaleryController::class, 'destroy'])->name('galery-delete');

	Route::get('/category', [CategoryController::class, 'index'])->name('category');
	Route::post('/category-store', [CategoryController::class, 'store'])->name('category-store');
	Route::post('/category-update/{id}', [CategoryController::class, 'update'])->name('category-update');
	Route::get('/category-delete/{id}', [CategoryController::class, 'destroy'])->name('category-delete');

	Route::get('/jam-buka', [JamBukaController::class, 'index'])->name('jam-buka');
	Route::post('/jam-buka-store', [JamBukaController::class, 'store'])->name('jam-buka-store');
	Route::post('/jam-buka-update/{id}', [JamBukaController::class, 'update'])->name('jam-buka-update');
	Route::get('/jam-buka-delete/{id}', [JamBukaController::class, 'destroy'])->name('jam-buka-delete');

	Route::get('/team', [TeamController::class, 'index'])->name('team');
	Route::post('/team-store', [TeamController::class, 'store'])->name('team-store');
	Route::post('/team-update/{id}', [TeamController::class, 'update'])->name('team-update');
	Route::get('/team-delete/{id}', [TeamController::class, 'destroy'])->name('team-delete');

	Route::get('/about', [AboutController::class, 'index'])->name('about');
	Route::post('/about-store', [AboutController::class, 'store'])->name('about-store');

	Route::get('/menu', [MenuController::class, 'index'])->name('menu');
	Route::post('/menu-store', [MenuController::class, 'store'])->name('menu-store');
	Route::post('/menu-update/{id}', [MenuController::class, 'update'])->name('menu-update');
	Route::get('/menu-delete/{id}', [MenuController::class, 'destroy'])->name('menu-delete');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-management', [InfoUserController::class, 'userManagement'])->name('user-management');
	Route::post('/tambah-user', [InfoUserController::class, 'tambahUser'])->name('tambah-user');
	Route::post('/update-user/{id}', [InfoUserController::class, 'updateUser'])->name('update-user');
	Route::get('/delete-user/{id}', [InfoUserController::class, 'deleteUser'])->name('delete-user');
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
        if (Auth::user()) {
            return redirect('/login');
        }

    })->name('dashboard');

    // Route for the dashboard page
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // Group of routes for the testimonial feature
    Route::prefix('testimoni')->group(function () {
        Route::get('/', [TestimoniController::class, 'index'])->name('testimoni');
        Route::post('/store', [TestimoniController::class, 'store'])->name('testimoni-store');
        Route::post('/update/{id}', [TestimoniController::class, 'update'])->name('testimoni-update');
        Route::get('/delete/{id}', [TestimoniController::class, 'destroy'])->name('testimoni-delete');
    });

    // Group of routes for the gallery feature
    Route::prefix('galery')->group(function () {
        Route::get('/', [GaleryController::class, 'index'])->name('galery');
        Route::post('/store', [GaleryController::class, 'store'])->name('galery-store');
        Route::post('/update/{id}', [GaleryController::class, 'update'])->name('galery-update');
        Route::get('/delete/{id}', [GaleryController::class, 'destroy'])->name('galery-delete');
    });

    // Group of routes for the category feature
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category');
        Route::post('/store', [CategoryController::class, 'store'])->name('category-store');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category-update');
        Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('category-delete');
    });

    // Group of routes for the opening hours feature
    Route::prefix('jam-buka')->group(function () {
        Route::get('/', [JamBukaController::class, 'index'])->name('jam-buka');
        Route::post('/store', [JamBukaController::class, 'store'])->name('jam-buka-store');
        Route::post('/update/{id}', [JamBukaController::class, 'update'])->name('jam-buka-update');
        Route::get('/delete/{id}', [JamBukaController::class, 'destroy'])->name('jam-buka-delete');
    });

    // Group of routes for the menu feature
    Route::prefix('menu')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('menu');
        Route::post('/store', [MenuController::class, 'store'])->name('menu-store');
        Route::post('/update/{id}', [MenuController::class, 'update'])->name('menu-update');
        Route::get('/delete/{id}', [MenuController::class, 'destroy'])->name('menu-delete');
    });

    // Route for the logout feature
    Route::get('/logout', [SessionsController::class, 'destroy']);

    // Group of routes for the user management feature
    Route::get('/user-management', [InfoUserController::class, 'userManagement'])->name('user-management');
    Route::post('/tambah-user', [InfoUserController::class, 'tambahUser'])->name('tambah-user');
    Route::post('/update-user/{id}', [InfoUserController::class, 'updateUser'])->name('update-user');
    Route::get('/delete-user/{id}', [InfoUserController::class, 'deleteUser'])->name('delete-user');
    Route::get('/user-profile', [InfoUserController::class, 'create']);
    Route::post('/user-profile', [InfoUserController::class, 'store']);

    // Route for the sign up page
    Route::get('/login', function () {
        return view('dashboard');
    })->name('sign-up');
});

// Group of routes that do not require authentication
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/login-post', [SessionsController::class, 'store']);
    Route::get('/login/forgot-password', [ResetController::class, 'create']);
    Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
    Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
    Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

// Route for the login page
Route::get('/login', function () {
    return view('session/login-session');
})->name('login');
