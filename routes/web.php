<?php

use App\Http\Controllers\Auth\admin;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('#', function () {
    return view('welcome');
});
Route::get('/', [UserController::class, 'UserDashboard'])->name('user.dashboard');


Route::middleware(['guest'])->group(function(){
    Route::get('/admin/login',[UserLoginController::class, "login"])->name('admin.login');
    Route::post('/admin/submit',[UserLoginController::class, "submit"])->name('admin.submit');

    // Route::get('/guru/login',[GuruLoginController::class, "login"])->name('guru.login');
    // Route::post('/guru/submit',[GuruLoginController::class, "submit"])->name('guru.submit');

    // Route::get('/siswa/login',[siswaLoginController::class, "login"])->name('siswa.login');
    // Route::post('/siswa/submit',[siswaLoginController::class, "submit"])->name('siswa.submit');

});

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [UserController::class, 'Adminlogout'])->name('admin.logout');

    Route::get('/admin/CompanyProfile', [CompanyProfileController::class, 'CompanyProfile'])->name('admin.CompanyProfile');
    Route::get('/admin/CompanyProfile/create', [CompanyProfileController::class, 'create'])->name('admin.CompanyProfile_create');
    Route::post('/admin/CompanyProfile/store', [CompanyProfileController::class, 'store'])->name('admin.CompanyProfile_store');
    Route::get('/admin/CompanyProfile/edit{id_CompanyProfile}', [CompanyProfileController::class, 'edit'])->name('CompanyProfile_edit');
    Route::put('/admin/CompanyProfile/edit{id_CompanyProfile}', [CompanyProfileController::class, 'update'])->name('CompanyProfile_update');
    Route::get('/admin/CompanyProfile/delete/{id_CompanyProfile}',[CompanyProfileController::class, "delete"])->name('CompanyProfile_delete');


    // Route::get('/admin/profile', [UserController::class, 'profile'])->name('admin.profile');
    // Route::put('/admin/profile/update', [UserController::class, 'update'])->name('admin.profile.update');
});

Route::middleware(['role:user'])->group(function () {


});
