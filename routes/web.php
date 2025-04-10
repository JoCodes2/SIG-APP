<?php

use App\Http\Controllers\CMS\MemberController;
use App\Http\Controllers\CMS\TimetableController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('Admin.dashboard');
});

Route::get('/member', function () {
    return view('Admin.member');
});

Route::get('/timetable', function () {
    return view('Admin.timetable');
});

Route::prefix('v1')->group(function () {

    // route  api  //
    Route::prefix('member')->controller(MemberController::class)->group(function () {
        Route::get('/', 'getAllData');
        Route::post('/create', 'createData');
        Route::get('/get/{id}', 'getDataById');
        Route::post('/update/{id}', 'updateDataById');
        Route::delete('/delete/{id}', 'deleteDataById');
    });

    // route  api  //
    Route::prefix('timetable')->controller(TimetableController::class)->group(function () {
        Route::get('/', 'getAllData');
        Route::post('/create', 'createData');
        Route::get('/get/{id}', 'getDataById');
        Route::post('/update/{id}', 'updateDataById');
        Route::delete('/delete/{id}', 'deleteDataById');
    });
});
