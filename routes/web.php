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

Route::get('/', 'HomeController@index');
Route::get('/about-us', 'AboutController@index');


Route::get('/team', 'MemberController@index');
Route::get('/team/{slug}', 'MemberController@show');

Route::get('/services', 'ServicesController@index');
Route::get('/services/{slug}', 'ServicesController@show');

Route::get('/properties', 'PropertyController@index');

Route::get('/{category}-for-{for}-in-dubai', 'PropertyController@searchByCategoryFor');
Route::get('/{category}-for-{for}-in-dubai-{loc?}', 'PropertyController@searchByLoc');


Route::get('/{category}-for-{for}-in-dubai-/{subloc?}', 'PropertyController@searchBySubLocOnly');

Route::get('/{category}-for-{for}-in-dubai-{loc?}/{subloc?}', 'PropertyController@searchBySubLoc');

Route::get('/{category}-for-{for}-in-dubai-{loc?}/{subloc?}/{area?}', 'PropertyController@searchByArea');


Route::get('/{category}-for-{for}-in-{area?}', 'PropertyController@byArea');


Route::get('/{category}-for-{for}-in-dubai-/{subloc?}/{area?}', 'PropertyController@searchByAreaOnly');

Route::get('/{category}-for-{for}-in-dubai-/{subloc?}', 'PropertyController@searchBySubLocOnly');

Route::get('/{category}-for-{for}-in-dubai-{loc}/{subloc}/{area}/ref-{ref}', 'PropertyController@searchByRef');

Route::get('/{category}-for-{for}-in-dubai-/{subloc?}', 'PropertyController@searchBySubLocOnly');
Route::get('/{category}-for-{for}-in-dubai-/{subloc}/{area}/ref-{ref}', 'PropertyController@searchByRefOnly');

Route::get('/property-search', 'PropertyController@advanceSearch');

Route::get('/the-selection', 'TheSelectionController@index');
Route::get('/the-selection/{category}-for-{for}-in-dubai', 'TheSelectionController@searchByCategoryFor');
Route::get('/the-selection/{category}-for-{for}-in-dubai-{loc}', 'TheSelectionController@searchByLoc');
Route::get('/the-selection/{category}-for-{for}-in-dubai-{loc}/{subloc}', 'TheSelectionController@searchBySubLoc');
Route::get('/the-selection/{category}-for-{for}-in-dubai-{loc}/{subloc}/ref-{ref}', 'TheSelectionController@searchByRef');

Route::get('/off-plan-properties-dubai', 'OffplanController@index');
Route::get('/off-plan-properties-dubai/{slug}', 'OffplanController@show');
Route::get('/off-plan-properties-dubai/{slug}/{property}', 'OffplanController@details');

Route::get('/real-estate-developers-in-dubai', 'DeveloperController@index');
Route::get('/real-estate-developers-in-dubai/{slug}', 'DeveloperController@show');

Route::get('/dubai-communities', 'FocusCommunitiesController@index');
Route::get('/dubai-communities/{slug}', 'FocusCommunitiesController@show');

Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/{slug}', 'ProjectsController@show');


Route::get('/join-our-team', 'CareersController@index');
Route::get('/join-our-team/{slug}', 'CareersController@show');
Route::get('/join-our-team/aqua/{slug}', 'CareersController@aqua');

Route::get('/news', 'NewsController@index');
Route::get('/news/{slug}', 'NewsController@show');

Route::get('/contact-us', 'contactController@index');

Route::get('/form-submit', 'formController@create');
Route::post('/form-submit', 'formController@store');

Route::get('/thank-you', 'formController@index');

Route::get('/api/data/locations', 'PropertyController@locationApi');

Route::get('/api/form-check', 'formController@check');
Route::post('/api/form-check', 'formController@check');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
