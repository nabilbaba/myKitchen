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

Route::get('/', function () {
    return view('myKitchen_visiteur');
})->name('myKitchen');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/profileA','AdminController@profile_admin')->name('profileA');

Route::put('/updateprofile/{id}','AdminController@updateProfile')->name('updateprofile');

Route::get('/statistiques', function () {
    return view('statistiques_admin');
})->name('statistiques');

Route::get('/publications', function () {
    return view('publications_admin');
})->name('publications');

Route::get('/utilisateurs', function () {
    return view('utilisateurs_admin');
})->name('utilisateurs');

Route::get('/icons', function () {
    return view('icons_admin');    
})->name('icons');

Route::get('/recettes', function () {
    return view('recettes_admin');
})->name('recettes');

Route::get('/catégories', function () {
    return view('catégorie_admin');
})->name('catégories');

Route::get('/activerLesComptes', function () {
    return view('comptes_desactivés');
})->name('activerLesComptes');

//=======================================//
Route::get('/profileC','HomeController@index3')->name('profileC');

Route::get('/recettesC', function () {
    return view('recettes_cuisinier');
})->name('recettesC');

Route::get('/iconsC', function () {
    return view('icons_cuisinier');
})->name('iconsC');

//======================================//

Route::get('/recettesDetails', function () {
    return view('details_recettes_visiteur');
})->name('recettesDetails');



