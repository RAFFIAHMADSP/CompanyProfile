<?php

use App\Http\Controllers\Auth\admin;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestimonialsController;
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
    Route::get('/admin/CompanyProfile/edit/{id_CompanyProfile}', [CompanyProfileController::class, 'edit'])->name('CompanyProfile_edit');
    Route::put('/admin/CompanyProfile/edit/{id_CompanyProfile}', [CompanyProfileController::class, 'update'])->name('CompanyProfile_update');
    Route::get('/admin/CompanyProfile/delete/{id_CompanyProfile}',[CompanyProfileController::class, "delete"])->name('CompanyProfile_delete');

    Route::get('/admin/Services', [ServicesController::class, 'Services'])->name('admin.Services');
    Route::get('/admin/Services/create', [ServicesController::class, 'create'])->name('admin.Services_create');
    Route::post('/admin/Services/store', [ServicesController::class, 'store'])->name('admin.Services_store');
    Route::get('/admin/Services/edit/{id_services}', [ServicesController::class, 'edit'])->name('Services_edit');
    Route::put('/admin/Services/edit/{id_services}', [ServicesController::class, 'update'])->name('Services_update');
    Route::get('/admin/Services/delete/{id_services}',[ServicesController::class, "delete"])->name('Services_delete');

    Route::get('/admin/Products', [ProductsController::class, 'Products'])->name('admin.Products');
    Route::get('/admin/Products/create', [ProductsController::class, 'create'])->name('admin.Products_create');
    Route::post('/admin/Products/store', [ProductsController::class, 'store'])->name('admin.Products_store');
    Route::get('/admin/Products/edit/{id_Products}', [ProductsController::class, 'edit'])->name('Products_edit');
    Route::put('/admin/Products/edit/{id_Products}', [ProductsController::class, 'update'])->name('Products_update');
    Route::get('/admin/Products/delete/{id_Products}',[ProductsController::class, "delete"])->name('Products_delete');

    Route::get('/admin/Testimonials', [TestimonialsController::class, 'Testimonials'])->name('admin.Testimonials');
    Route::get('/admin/Testimonials/create', [TestimonialsController::class, 'create'])->name('admin.Testimonials_create');
    Route::post('/admin/Testimonials/store', [TestimonialsController::class, 'store'])->name('admin.Testimonials_store');
    Route::get('/admin/Testimonials/edit/{id_Testimonials}', [TestimonialsController::class, 'edit'])->name('Testimonials_edit');
    Route::put('/admin/Testimonials/edit/{id_Testimonials}', [TestimonialsController::class, 'update'])->name('Testimonials_update');
    Route::get('/admin/Testimonials/delete/{id_Testimonials}',[TestimonialsController::class, "delete"])->name('Testimonials_delete');

    Route::get('/admin/Galleries', [GalleriesController::class, 'Galleries'])->name('admin.Galleries');
    Route::get('/admin/Galleries/create', [GalleriesController::class, 'create'])->name('admin.Galleries_create');
    Route::post('/admin/Galleries/store', [GalleriesController::class, 'store'])->name('admin.Galleries_store');
    Route::get('/admin/Galleries/edit/{id_Galleries}', [GalleriesController::class, 'edit'])->name('Galleries_edit');
    Route::put('/admin/Galleries/edit/{id_Galleries}', [GalleriesController::class, 'update'])->name('Galleries_update');
    Route::get('/admin/Galleries/delete/{id_Galleries}',[GalleriesController::class, "delete"])->name('Galleries_delete');

    Route::get('/admin/Contacts', [ContactsController::class, 'Contacts'])->name('admin.Contacts');
    Route::get('/admin/Contacts/create', [ContactsController::class, 'create'])->name('admin.Contacts_create');
    Route::post('/admin/Contacts/store', [ContactsController::class, 'store'])->name('admin.Contacts_store');
    Route::get('/admin/Contacts/edit/{id_Contacts}', [ContactsController::class, 'edit'])->name('Contacts_edit');
    Route::put('/admin/Contacts/edit/{id_Contacts}', [ContactsController::class, 'update'])->name('Contacts_update');
    Route::get('/admin/Contacts/delete/{id_Contacts}',[ContactsController::class, "delete"])->name('Contacts_delete');




    Route::get('/admin/profile', [UserController::class, 'profile'])->name('admin.profile');
    // Route::put('/admin/profile/update', [UserController::class, 'update'])->name('admin.profile.update');
});

Route::middleware(['role:user'])->group(function () {


});
