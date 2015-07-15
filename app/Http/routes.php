<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {
  return redirect('search');
});

Route::get('home', function() {
  return redirect('search');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(array('before' => 'auth'), function() {
    Route::get('searchfields', 'SearchFieldController@index');
    Route::get('search', 'SearchController@index');
    Route::post('search', 'SearchController@results');
    Route::get('search/fields', 'SearchController@getQueryFields');
    Route::post('search/fields', ['as' => 'fieldsSubmit', 'uses' => 'SearchController@postQueryFields']);
    Route::get('fieldinfo', function()
    {
        $fieldId = Input::get('fieldId');
        return Form::addField($fieldId);
    });
});

Route::filter('auth', function()
{
    if (Auth::guest()) return Redirect::to('auth/login');
});
