<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
    return 'hi there';
});

Route::get('about', function() {
	//$people = [];
	$people = ['Marlon', 'Santi', 'More','Alex'];
	//return view('pages.about', ['people'=>$people]);
	//return view('pages.about', compact('people'));
	//return view('pages.about')->with('people',$people);
	return view('pages.about')->withPeople($people);
});
