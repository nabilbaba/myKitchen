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

Route::get('/page_not_found', function () {
    return view('page_not_found');
})->name('page_not_found');

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
Route::delete('/desactiver-cuisinier/{id}','AdminController@desactiverCuisinier')->name('cuisinier.desactive');
Route::get('/recup-cuisinier/','AdminController@recupererCuisinier')->name('cuisinier.recup');
Route::get('/recup-confirmer/{id}','AdminController@recupeConfirmer')->name('cuisinier.recupConfir');
Route::get('getCat','AdminController@getCategoriepagination')->name('catégories.getCat');
Route::delete('/refuse-recipe/{id}','AdminController@refuseRecipe')->name('recipe.refuse');
Route::delete('/accepte-recipe/{id}','AdminController@validerRecipe')->name('recipe.accepte');
Route::delete('/delete-line/{id}','AdminController@deleteLine')->name('line.delete');
Route::get('/statistiques', function () {
    return view('statistiques_admin');
})->name('statistiques');

Route::get('/publications', 'AdminController@accpterRecipe')->name('publications');
Route::delete('/delete-recipeA/{id}','AdminController@deleteRecipeAdmin')->name('recipe.deleteA');
Route::get('/get-recipeDate','AdminController@getRecettesDate')->name('recettes.getDate');

Route::get('/icons', function () {
    return view('icons_admin');    
})->name('icons');



Route::get('/recettes', 'AdminController@getRecettes')->name('recettes.get');
Route::get('/search-cuisinier','AdminController@searchUser')->name('user.search');




//=======================================//
Route::get('/profileC','CuisinierController@profile_cuisinier')->name('profileC');
Route::get('/recettesC','CuisinierController@getRecipes')->name('recettesC');
Route::get('/ingredientsC','CuisinierController@getIngredients')->name('ingredientsC');
Route::post('/add-recette','CuisinierController@addRecette')->name('recette.add');
Route::get('getId/{id}', 'CuisinierController@getID');
Route::post('/add-ingredient','CuisinierController@addIngredient')->name('ingredient.add');
Route::get('/recetteC/{id}','CuisinierController@getRecetteById')->name('recetteC.getbyid');
Route::get('/notifications', 'CuisinierController@notifRecipes')->name('notifsC');
Route::delete('/delete-recipe/{id}','CuisinierController@deleteRecipe')->name('recipe.delete');
Route::get('/recettesC/{id}','CuisinierController@getRecipeById')->name('recipe.getbyid');
Route::put('/update-recette/','CuisinierController@updateRecipe')->name('recipe.update');

Route::delete('/delete-ingredient/{id}','CuisinierController@deleteIngredient')->name('ingredient.delete');
Route::get('/search-recette','CuisinierController@searchRecette')->name('recette.search');

Route::get('/iconsC', 'CuisinierController@getIcons')->name('iconsC');



//======================================//

Route::get('/recettesDetails', function () {
    return view('details_recettes_visiteur');
})->name('recettesDetails');



