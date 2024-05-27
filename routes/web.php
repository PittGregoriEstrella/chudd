<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\ReportController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/reports', [ReportController::class, 'index'])->name('admin.reports');


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::post('/beneficiary', [BeneficiaryController::class, 'store'])->name('beneficiary.create');
    Route::get('/beneficiary', [BeneficiaryController::class, 'store'])->name('beneficiary.view');
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('page');
    Route::get('/beneficiaryprofile', [App\Http\Controllers\Admin\BeneficiaryProfileController::class, 'index']);
    Route::get('/reports', [App\Http\Controllers\ReportController::class, 'index'])->name('reports.index');
});