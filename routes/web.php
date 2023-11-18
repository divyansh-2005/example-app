<?php

use Illuminate\Support\Facades\Route;
use Practicals\song;
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
    return view('welcome');
});

Route::get('/veggies', function () {
    return view('veggies');
});

Route::get('/veggies/{veggieName}', function (string $veggieName){
	return $veggieName;
})->whereIn('veggieName',['baigan','bhindi','aaloo','gobhi']);

Route::get('/songs', function () {
    return "Songs";
});

Route::get('/songs', function () {
    return view('songs');
});

Route::get('/songs', function () {
    $song = new Song();
    $song->setTitle("Bohemian Rhapsody");
    $song->setArtist("Queen");
    $song->setGenre("Rock");
    $song->setTempo("70 BPM");
    return view('songs', [ 'song' => $song ]);
});




