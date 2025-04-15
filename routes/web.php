<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CMS\ContentController;
use App\Http\Controllers\CMS\MemberController;
use App\Http\Controllers\CMS\TimetableController;
use Illuminate\Support\Facades\Route;


Route::post('v1/login', [AuthController::class, 'login']);
Route::get('/login', function () {
    return view('Auth.Login');
})->name('login')->middleware('guest');

Route::prefix('v1')->group(function () {

    // route  api  //
    Route::prefix('member')->controller(MemberController::class)->group(function () {
        Route::get('/', 'getAllData');
        Route::post('/create', 'createData');
        Route::get('/get/{id}', 'getDataById');
        Route::post('/update/{id}', 'updateDataById');
        Route::delete('/delete/{id}', 'deleteDataById');
        Route::get('/get-total-members', 'getTotalAnggota');
    });

    // route  api  //
    Route::prefix('timetable')->controller(TimetableController::class)->group(function () {
        Route::get('/', 'getAllData');
        Route::post('/create', 'createData');
        Route::get('/get/{id}', 'getDataById');
        Route::post('/update/{id}', 'updateDataById');
        Route::delete('/delete/{id}', 'deleteDataById');
    });

    Route::prefix('content')->controller(ContentController::class)->group(function () {
        Route::get('/{category}', 'getAllData');
        Route::post('/create', 'createData');
        Route::get('/get/{id}', 'getDataById');
        Route::post('/update/{id}', 'updateDataById');
        Route::delete('/delete/{id}', 'deleteDataById');
    });
});
Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/home', function () {
        return view('Admin.dashboard');
    });

    Route::get('/member', function () {
        return view('Admin.member');
    });

    Route::get('/timetable', function () {
        return view('Admin.timetable');
    });

    Route::get('/galerii', function () {
        return view('Admin.galeri');
    });

    Route::get('/news', function () {
        return view('Admin.news');
    });

    Route::get('/link', function () {
        return view('Admin.link');
    });


    Route::post('v1/logout', [AuthController::class, 'logout']);
});



// ui web
Route::get('/', function () {
    return view('Ui.home');
});
Route::get('/profile', function () {
    return view('Ui.profile');
});
Route::get('/jadwal', function () {
    return view('Ui.jadwal');
});
Route::get('/berita', function () {
    return view('Ui.news');
});
Route::get('/galeri', function () {
    return view('Ui.galeri');
});
Route::get('/konten', function () {
    return view('Ui.content');
});
