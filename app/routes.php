<?php

/**
 * halaman index
 */
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

/**
 * route simpan code
 */
Route::post('simpan', array('as' => 'simpan', 'uses' => 'HomeController@simpan'));

/**
 * route tampil code
 */
Route::get('{uri}', array('as' => 'tampil', 'uses' => 'HomeController@tampil'))->where('uri', '[a-z0-9]+');