<?php

use App\Http\Controllers\contactsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/v1/notebook/', [contactsController::class, 'getContacts']);
Route::post('/v1/notebook', [contactsController::class, 'addContact']);
Route::post('/v1/notebook/random', [contactsController::class, 'addRndContact']);
Route::get('/v1/notebook/{id?}/',[contactsController::class, 'getContact']);
Route::post('/v1/notebook/{id}',[contactsController::class, 'editContact']);
Route::delete('/v1/notebook/{id}',[contactsController::class, 'deleteContact']);
