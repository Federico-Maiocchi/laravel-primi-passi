<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $data = [
        'title' => 'Home',
        'subtitle' => 'Description'

    ];

    return view('home', $data);
})->name('home');

Route::get('/Informations', function () {

    $data = [
        'title' => 'Welcome in page Info',
        'subtitle' => 'Info'

    ];

    return view('/Info', $data);
})->name('info');

Route::get('/Contacts', function () {

    $data = [
        'title' => 'Welcome in page Contact',
        'subtitle' => 'Contact'

    ];

    return view('/Contact', $data);
})->name('contacts');