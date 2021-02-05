<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'auth'], function ($router) {
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
});

Route::group(['middleware' => 'jwt.auth'], function ($router) {
    //Endpoints for Recipe
    Route::post('save-recipe', 'RecipeController@store');
    Route::post('create-recipe', 'RecipeController@create');
    Route::post('delete-recipe', 'RecipeController@delete');
    Route::get('recipes', 'RecipeController@index');

    //Endpoints for Ingridients
    Route::post('create-ingredient', 'IngredientController@create');
    Route::get('ingredients', 'IngredientController@index');
    Route::post('delete-ingredient', 'IngredientController@delete');

    //Endpoints for Box
    Route::post('create-box', 'BoxController@create');
    Route::get('boxes', 'BoxController@index');
    Route::post('delete-box', 'BoxController@delete');


    
});