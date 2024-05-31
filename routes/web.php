<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/testimonials', function () {
    return view('pages.testimonials');
});
Route::get('/projects', function () {
    return view('pages.project');
});
Route::get('/zero-waste', function () {
    return view('pages.zero-waste');
});
Route::get('/dumpster-rental', function () {
    return view('pages.dumpster-rental');
});
Route::get('/recylcing-services', function () {
    return view('pages.about');
});
Route::get('/residential-pickup', function () {
    return view('pages.about');
});
Route::get('/business-pickup', function () {
    return view('pages.business-pickup');
});
Route::get('/portable-toilet', function () {
    return view('pages.portable-toilet');
});



Route::post('/admin/login', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');
Route::delete('/contact/delete/{id}', [AdminLoginController::class, 'destroy'])->name('contact.delete');


Route::post('/contactForm', [AdminLoginController::class, 'contact']);

Route::middleware(['admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminLoginController::class, 'index'])->name('admin.dashboard');
    Route::get('/contactus', [AdminLoginController::class, 'contact_list'])->name('admin.contactlist');

});



