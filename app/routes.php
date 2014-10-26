<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
 */

// landing page
Route::get('/', function () {
	return View::make('index');
});

// Display Random User Generator
Route::get('/generate_user', function () {

		return View::make('generate_user');
});

// Process Random User Generator
Route::post('/generate_user', function () {

	$total_users  = $_POST["total_users"];
	$faker = Faker\Factory::create();
	$users = array();

        for($i = 0; $i < $total_users; $i++) {
            $user =  array(
                "name"  => $faker->name,
                "address" => isset($_POST["address"]) ? $faker->address : null,
                "phoneNumber" => isset($_POST["phoneNumber"]) ? $faker->phoneNumber : null,
            );
            $users[] = $user;
        }

        return View::make('generate_user', array('users' => $users));
});




Route::get('/generate_ipsum', function () {

	return View::make('generate_ipsum');
});

// Process Lorem Ipsum Generator
Route::post('/generate_ipsum', function () {

	 	$total_paragraphs  = $_POST["total_paragraphs"];
        $generator = new Badcow\LoremIpsum\Generator();
        $ipsum =  $generator->getParagraphs($total_paragraphs);

		return View::make('generate_ipsum', array('ipsum' => $ipsum));
});