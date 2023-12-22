<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;


Route::get('/pesan', [OrderController::class, 'showFormPesan'])->name('show-form-data');

Route::post('/submit-data', [OrderController::class, 'submitOrder'])->name('submit-data');

Route::get('/', function () {
    return redirect()->route('show-form-data'); // Ubah rute ke show-form-pesan
});
