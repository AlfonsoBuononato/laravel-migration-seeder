<?php
/* 
Oggi iniziate a pregustare le vacanze che farete alla fine del corso creando una tabella per i pacchetti di viaggio organizzati da un'agenzia turistica.
Dopo averne definito la struttura tramite una migration, inserite dei dati attraverso l'uso di un seeder.
BONUS:
Mostriamo i dati creati sopra in un file blade. */
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

Route::get('/', 'PageController@index');
