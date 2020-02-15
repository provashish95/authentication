<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');


Route::get('/customer', 'CustomerController@index')->name('customer');
Route::get('/number', 'PhoneController@index')->name('number');
Route::get('/post', 'PostController@index')->name('post');
Route::get('/postbyname', 'PostController@Post')->name('PostByName');

//department crud are here............
Route::get('/department', 'DepartmentController@department')->name('department');
Route::post('/store/department', 'DepartmentController@departmentStore')->name('store.department');
Route::get('/all/department', 'DepartmentController@alldepartment')->name('AllDepartment');
Route::get('view/department/{id}', 'DepartmentController@viewDepartment');
Route::get('delete/department/{id}', 'DepartmentController@deleteDepartment');
Route::get('edit/department/{id}', 'DepartmentController@editDepartment');
Route::post('update/department/{id}', 'DepartmentController@updateDepartment');

Route::get('view/departmentById/{id}','StudentController@viewDepartmentById');

//students are here................
Route::get('/student', 'StudentController@student')->name('student');
Route::post('/StudentStore', 'StudentController@StudentStore')->name('StudentStore');
Route::get('/allStudent', 'StudentController@allStudent')->name('AllStudent');
Route::get('view/student/{id}', 'StudentController@viewStudent');

