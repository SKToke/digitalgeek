<?php

use App\Http\Controllers\frontend\CertificateVerifyController;
use Illuminate\Support\Facades\Route;

//knowledge base
Route::controller(CertificateVerifyController::class)->group(function () {
    Route::get('certificate-verify', 'index')->name('certificate-verify.index');
    Route::post('certificate-verify', 'show')->name('certificate-verify.show');
});
