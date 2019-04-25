<?php

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

Auth::routes();

//Accueil
Route::get('/', 'QuoteController@index');

Route::get('/home', 'HomeController@index')->name('home');

//Citations --> QuoteController
Route::get('/citations', 'QuoteController@afficherTous');

Route::post('/citation/{n}', 'QuoteController@afficher');

Route::get('/citation/ajouter', 'QuoteController@ajouter');

Route::get('/citation/{n}/supprimer', 'QuoteController@supprimer');

Route::get('/citation/{n}/modifier', 'QuoteController@modifier');

//Utilisateur -> User
Route::get('/utilisateur/{n}', 'QuoteController@afficherUser');