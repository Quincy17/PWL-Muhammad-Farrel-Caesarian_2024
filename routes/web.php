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

//Mengambil daftar hello kemudian menampilkan Hello World di halaman web
Route::get('/hello', function () {
    return 'Hello World';
});

//Mengambil daftar world kemudian menampilkan World di halaman web
Route::get('/world', function () {
    return 'World';
});

//Route untuk menampilkan selamat datang
Route::get('/', function () {
    return 'Selamat Datang';
});

//Route untuk menampilkan NIM dan Nama Saya
Route::get('/about', function () {
    return '2341720053 Muhammad Farrel Caesarian';
});

//Memanggil Route /user/{name} sekaligus mengirimkan parameter berupa nama user$name
Route::get('/user/{name}', function($name){
    return 'Nama Saya '.$name;
});

//Memanggil Route yang mempunyai lebih dari 2 parameter
Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

//Membuat Route articles yang dapat menampilkan halaman artikel dengan id
Route::get('/articles/{id}', function($id){
    return 'Halaman Artikel dengan ID '.$id;
});

//Membuat Route dengan Optional Parameter
Route::get('/user/{name?}', function($name='John'){
    return 'Nama Saya '.$name;
});