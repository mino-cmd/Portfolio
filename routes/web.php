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
    return view('blade-scafolding.layout.master');
});

 Route::get('/Osteopage', function () {
    return view('blade-scafolding.layout.Osteopage');
 });

 Route::get('/home', function () {
     return view('blade-scafolding.layout.master');
  });
  Route::get('/music', function () {
      return view('blade-scafolding.layout.masterGrid');
  });
  Route::get('/Music', function () {
      return view('blade-scafolding.layout.masterGrid');
  });
  Route::get('/404', function () {
      return view('blade-scafolding.layout.404');
  });
  Route::get('/test', function () {
      return view('blade-scafolding.layout.testpage');
  });
