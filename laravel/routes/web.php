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

route::get('/',function(){
  return view('welcome');
});
route::get('/homepage',function(){

  return view("homepage");
});
route::get('/about',function(){
  return view("about");
});
route::get('/contact',function(){
  return view('contact');
});
route::get('/student',function(){
  return view('student');
});
route::get('/Faculty',function(){
  return view('Faculty');
});
