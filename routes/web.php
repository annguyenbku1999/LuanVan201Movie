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

URL::forceScheme('https');

// $router->get('/', function () use ($router) {
//   return $router->app->version();
// });
$router->group(['prefix' => 'api'], function () use ($router) {

  
  $router->get('ShowMovie/{slug1}/{slug2?}/{slug3?}', [
    'uses' => 'App\Http\Controllers\MovieController@ShowMovie'
  ]);
  $router->get('ShowGenres/{slug1}/{slug2?}/{slug3?}', [
    'uses' => 'App\Http\Controllers\GenresController@ShowGenres'
  ]);
  

});
