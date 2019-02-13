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
$this->middleware('auth')->group( function() {

    $this->namespace('Site')->group( function() {
        $this->get('/','SiteController@index' )->name('home');
    });

    $this->namespace('Admin')->prefix('admin')->name('admin.')->prefix('admin')->group( function() {
        $this->get('/','AdminController@index')->name('home');
        $this->get('balance','BalanceController@index')->name('balance');
        $this->get('deposit','BalanceController@deposit')->name('balance.deposit');
    });




});


Auth::routes();


