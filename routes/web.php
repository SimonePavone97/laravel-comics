<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rotta pagina iniziale
Route::get('/', function () {

    $array_dati = config('data');

    $data = [
        'navBar' => $array_dati['navBar'],
        'arrayDCComics' => $array_dati['arrayDCComics'],
        'arrayShop' => $array_dati['arrayShop'],
        'arrayDC' => $array_dati['arrayDC'],
        'arraySites' => $array_dati['arraySites']
    ];
    return view('home', $data);
}) -> name('home');

// Rotta pagina dei fumetti
Route::get('/comics', function(){

    $array_dati = config('data');
    $array_comics = config('comics');

    $data = [
        'fumetti' => $array_comics,
        'navBar' => $array_dati['navBar'],
        'arrayDCComics' => $array_dati['arrayDCComics'],
        'arrayShop' => $array_dati['arrayShop'],
        'arrayDC' => $array_dati['arrayDC'],
        'arraySites' => $array_dati['arraySites'],
    ];
    return view('comics', $data);

}) -> name('comics');

// Rotta pagina dei fumetti = show
Route::get('/comics/{id}', function($id){

    $array_comics = config('comics');

    // Validazione parametro
    if(!is_numeric($id) || $id < 0 || $id >= count( $array_comics ) ){
        abort(404);
    }else{
        $array_dati = config('data');
        $data = [
            'fumetto' => $array_comics[$id],
            'navBar' => $array_dati['navBar'],
            'arrayDCComics' => $array_dati['arrayDCComics'],
            'arrayShop' => $array_dati['arrayShop'],
            'arrayDC' => $array_dati['arrayDC'],
            'arraySites' => $array_dati['arraySites'],
        ];
        return view('comic', $data);

    }

}) -> name('comic');

