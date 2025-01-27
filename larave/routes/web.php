<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
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
    return view('auth/login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/form-pembayaran', function () {
    return view('form_pembayaran');
});
Route::get('/pembayaran', function () {
    return view('pembayaran');
});
Route::get('/setting', function () {
    return view('setting');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/pod', 'Admin\BarangController@pod');
Route::get('/mod', 'Admin\BarangController@mod');
Route::get('/rda', 'Admin\BarangController@rda');
Route::get('/coil', 'Admin\BarangController@coil');
Route::get('/baterai', 'Admin\BarangController@baterai');
Route::get('/liquid', 'Admin\BarangController@liquid');
Route::post('/form-pembayaran', 'Admin\PenjualanController@simpan');
Route::get('admin', 'Admin\AdminController@index');
Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/pages', 'Admin\PagesController');
Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')->only([
    'index', 'show', 'destroy'
]);
Route::resource('admin/settings', 'Admin\SettingsController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/barang', 'Admin\BarangController');
Route::resource('admin/penjualan', 'Admin\PenjualanController');
