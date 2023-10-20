<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiWaController;

Route::post('/send-whatsapp-message', [ApiWaController::class, 'sendWhatsAppMessage']);
Route::post('/send-whatsapp-message-postman', [ApiWaController::class, 'sendWhatsAppMessageWithPostman']);
Route::post('/send-whatsapp-poll-postman', [ApiWaController::class, 'sendWhatsAppPoll']);
Route::post('/send-whatsapp-lokasi-postman', [ApiWaController::class, 'sendWhatsAppLokasi']);
Route::post('/send-whatsapp-button-postman', [ApiWaController::class, 'sendWhatsAppButton']);
