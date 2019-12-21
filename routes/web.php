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

Route::get('mydoctor/section/{name}','DoctorsController@Sections');  // section pages

Route::get('mydoctor/contact-us','control@contact');  // contact us page

Route::get('/mydoctor/create-doctor','DoctorsController@create');  //show form to add new doctors to dataBase

Route::post('mydoctor/','DoctorsController@store'); // store doctors-info in DataBase

Route::get('/mydoctor/create-section','SectionController@create'); //  show form to add new section

Route::post('mydoctor/sections','SectionController@store'); // store doctors-info in DataBase




