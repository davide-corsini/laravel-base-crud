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
    return view('home');
})->name('homepage');


Route::resource('movies','MovieController');

// +--------+-----------+---------------------+----------------+----------------------------------------------+------------+
// | Domain | Method    | URI                 | Name           | Action                                       | Middleware |
// +--------+-----------+---------------------+----------------+----------------------------------------------+------------+
// |        | GET|HEAD  | /                   | homepage       | Closure                                      | web        |
// |        | GET|HEAD  | api/user            |                | Closure                                      | api        |
// |        |           |                     |                |                                              | auth:api   |
// |        | GET|HEAD  | movies         //*OK     | movies.index   | App\Http\Controllers\MovieController@index   | web        |
// |        | POST      | movies         //*OK     | movies.store   | App\Http\Controllers\MovieController@store   | web        |
// |        | GET|HEAD  | movies/create  //*OK     | movies.create  | App\Http\Controllers\MovieController@create  | web        |
// |        | GET|HEAD  | movies/{movie} //*OK     | movies.show    | App\Http\Controllers\MovieController@show    | web        |
// |        | PUT|PATCH | movies/{movie}      | movies.update  | App\Http\Controllers\MovieController@update  | web        |
// |        | DELETE    | movies/{movie}      | movies.destroy | App\Http\Controllers\MovieController@destroy | web        |
// |        | GET|HEAD  | movies/{movie}/edit | movies.edit    | App\Http\Controllers\MovieController@edit    | web        |
// +--------+-----------+---------------------+----------------+----------------------------------------------+------------+
