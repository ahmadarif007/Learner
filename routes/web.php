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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'WelcomeController@masterPage');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/aadmin', 'AdminController@dashboardContent')->middleware(['auth','checkrole']);
Route::get('/distributor','AdminController@dashboardContent')->middleware(['auth','checkrole']);
Route::get('/manager','AdminController@dashboardContent')->middleware(['auth','checkrole']);
Route::get('/user', 'AdminController@dashboardContent')->middleware(['auth','checkrole']);


Route::get('/dashboard', 'AdminController@dashboard')
		->name('dashboard')
		->middleware(['auth','checkrole']);	


/*---------- for user   ---------*/
Route::get('/add/distributorInfo','UserController@adduser')->middleware(['auth','checkrole']);
Route::get('/add/managerInfo','UserController@adduser')->middleware(['auth','checkrole']);

Route::get('/add/userInfo','UserController@addUser')->middleware(['auth','checkrole']);
Route::post('/save/userInfo','UserController@saveUser')->middleware(['auth','checkrole']);
Route::get('/manage/userInfo','UserController@manageUser')->middleware(['auth','checkrole']);
Route::get('/view/userInfo/{id}','UserController@viewUser')->middleware(['auth','checkrole']);
Route::get('/edit/userInfo/{id}','UserController@editUser')->middleware(['auth','checkrole']);
Route::post('/update/userInfo','UserController@updateUser')->middleware(['auth','checkrole']);
Route::get('/delete/userInfo/{id}','UserController@deleteUser')->middleware(['auth','checkrole']);            
/*---------- for user   ---------*/   


/*---------- for product   ---------*/
Route::get('/add/product','ProductController@addProduct');
Route::post('/save/product','ProductController@saveProduct');
Route::get('/manage/product','ProductController@manageProduct');
Route::get('/view/product/{id}','ProductController@viewProduct');
Route::get('/edit/product/{id}','ProductController@editProduct');
Route::post('/update/product','ProductController@updateProduct');
Route::get('/delete/product/{id}','ProductController@deleteProduct');            
/*---------- for product   ---------*/