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


Route::get('mydoctor','SectionController@Home');  //show home page

Route::get('mydoctor/section/{id}','DoctorsController@Sections');  // section pages

Route::get('/mydoctor/contact-us','ContactController@contactt');// contact us page
Route::post('/contact-us','ContactController@storcontact');  

Route::get('/mydoctor/create-doctor','DoctorsController@create');  //show form to add new doctors to dataBase

Route::post('mydoctor/','DoctorsController@store'); // store doctors-info in DataBase

Route::get('/mydoctor/create-section','SectionController@create'); //  show form to add new section

Route::post('mydoctor/sections','SectionController@store'); // store doctors-info in DataBase





Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home/logout', 'HomeController@logout');


// Customer Routes
Route::get('/customer/login', 'Customer\AuthController@showLoginForm');
Route::post('/customer/login', 'Customer\AuthController@login');
Route::post('/customer/logout/mydoctor', 'Customer\AuthController@logoutt');