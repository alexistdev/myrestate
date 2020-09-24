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

Route::get('/', 'FrontendController@index');
Route::get('rumah/{rumah}', 'RumahController@show');
Route::get('propertis', 'PropertiesController@index');
Route::get('agen', 'AgentController@index');
Route::get('agen/{agen}', 'AgentController@show');
Route::get('propertis/cari', 'PropertiesController@cari');
Route::get('beranda', 'partner\BerandaController@index');
Route::get('inbox', 'partner\InboxController@index');
Route::get('setting', 'partner\SettingController@index');

//Unit 
Route::get('unit', 'partner\UnitController@index');
Route::get('unit/tambah', 'partner\UnitController@create');
Route::get('unit/{rumah}', 'partner\UnitController@show');
Route::get('unit/{rumah}/edit', 'partner\UnitController@edit');
Route::patch('unit/{rumah}', 'partner\UnitController@update');
Route::post('unit/store', 'partner\UnitController@store');
Route::delete('unit/{rumah}', 'partner\UnitController@destroy');
Route::post('unit/API/hapus', 'partner\UnitController@hapusGambar');
Route::post('unit/API/upload', 'partner\UnitController@uploadGambar');

// Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', 'Auth\LoginController@login');
// Route::get('beranda', function () {
//     // Retrieve a piece of data from the session...
//     $idUser = session()->getId();
// });
