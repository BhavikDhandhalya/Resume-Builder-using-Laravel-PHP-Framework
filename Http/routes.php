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
    return view('welcome');
});

Route::post('/nice', function(\Illuminate\Http\Request $data) {
	return view('actions.resume', 
		['fullname' => $data['fullname'],
		'email' => $data['email'],
		'mobile' => $data['mobile'],
		'address' => $data['address'],
		'collegename' => $data['collegename'],
		'location' => $data['location'],
		'cgpa' => $data['cgpa'],
		'program' => $data['program'],
		'courses' => $data['courses'],
		'duration' => $data['duration'],

		'ptitle1' => $data['ptitle1'],
		'duration1' => $data['duration1'],
		'description1' => $data['description1'],
		
		'ptitle2' => $data['ptitle2'],
		'duration2' => $data['duration2'],
		'description2' => $data['description2'],

		'ptitle3' => $data['ptitle3'],
		'duration3' => $data['duration3'],
		'description3' => $data['description3'],

		'award1' => $data['award1'],
		'award2' => $data['award2'],
		'award3' => $data['award3'],
		'award4' => $data['award4'],
		'award5' => $data['award5'],

		'cname1' => $data['cname1'],
		'c_duration1' => $data['c_duration1'],
		'place1' => $data['place1'],
		'c_description1' => $data['c_description1'],

		'languages' => $data['languages'],
		'techno' => $data['techno'],
		'oper' => $data['oper']


		]);
})->name('nice');
