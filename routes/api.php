<?php

use App\Http\Controllers\contactsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Роуты

//все записи
Route::get('/v1/notebook/', [contactsController::class, 'getContacts']);
//добавить запись, но она не работает, тк нет формы
Route::post('/v1/notebook', [contactsController::class, 'addContact']);
//Добавить запись через фейкер
Route::post('/v1/notebook/random', [contactsController::class, 'addRndContact']);
//получить конкретную запись
Route::get('/v1/notebook/{id?}/',[contactsController::class, 'getContact']);
//изменить конкретную запись, тоже не работает, тк нет формы
Route::post('/v1/notebook/{id}',[contactsController::class, 'editContact']);
//удалить запись
Route::delete('/v1/notebook/{id}',[contactsController::class, 'deleteContact']);
