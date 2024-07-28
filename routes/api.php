<?php

use App\Http\Controllers\business_info_controller;

Route::get('/business_info', [business_info_controller::class, 'show']);
Route::post('/business_info', [business_info_controller::class, 'store']);
Route::put('/business_info/{id}', [business_info_controller::class, 'update']);
Route::delete('/business_info/{id}', [business_info_controller::class, 'destroy']);