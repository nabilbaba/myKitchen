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



//Route::put('/updateprofile/{id}','AdminController@updateProfile')->name('updateprofile');
Route::get('/profileA','AdminController@profile_admin')->name('profileA');
Route::get('/catégories','AdminController@getCategorie')->name('catégories');
Route::get('/cuisiniers','AdminController@getCooker')->name('cuisiniers');
Route::post('/cuisiniers','AdminController@getDetailsCuis')->name('cuisinier.getbyid');
Route::post('/add-categorie','AdminController@addCategorie')->name('categorie.add');
Route::get('/catégories/{id}','AdminController@getCategorieById')->name('categorie.getbyid');
Route::put('/update-categorie/','AdminController@updateCategorie')->name('categorie.update');
Route::delete('/delete-categorie/{id}','AdminController@deleteCategorie')->name('categorie.delete');
Route::get('/desactiver-cuisinier/{id}','AdminController@desactiverCuisinier')->name('cuisinier.desactive');
Route::get('/recup-cuisinier/','AdminController@recupererCuisinier')->name('cuisinier.recup');
Route::get('/recup-confirmer/{id}','AdminController@recupeConfirmer')->name('cuisinier.recupConfir');
Route::get('getCat','AdminController@getCategoriepagination')->name('catégories.getCat');


Route::get('/statistiques', function () {
    return view('statistiques_admin');
})->name('statistiques');

Route::get('/publications', function () {
    return view('publications_admin');
})->name('publications');


Route::get('/icons', function () {
    return view('icons_admin');    
})->name('icons');



Route::get('/recettes', function () {
    return view('recettes_admin');
})->name('recettes');


//=======================================//
Route::get('/profileC','CuisinierController@profile_cuisinier')->name('profileC');

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



