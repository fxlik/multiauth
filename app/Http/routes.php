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

// Route::group(['middleware' => ['web']], function(){
// 	Route::auth();
// 	Route::get('/home', 'HomeController@index');
// });



Route::group(['middleware' => ['web']], function () {
	Route::auth();
	Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');
    //Login Routes...
    Route::get('/admin2/login','AdminAuth\AuthController@showLoginForm');
    Route::post('/admin/login','AdminAuth\AuthController@login');
    Route::get('/admin/logout','AdminAuth\AuthController@logout');

//     // Registration Routes...
//     Route::get('admin2/register', 'AdminAuth\AuthController@showRegistrationForm');
//     Route::post('admin2/register', 'AdminAuth\AuthController@register');

//     Route::post('admin2/password/email','AdminAuth\PasswordController@sendResetLinkEmail');
//     Route::post('admin2/password/reset','AdminAuth\PasswordController@reset');
//     Route::get('admin2/password/reset/{token?}','AdminAuth\PasswordController@showResetForm');

//     Route::get('/admin2', function(){
//         return view('adminpage.page.dashboard');
//     });

// Admin
Route::get('admin', ['uses' => 'Admin2Controller@getIndex', 'as' => 'admin.index']);
Route::resource('admin/surveys', 'Admin\SurveyController', [
    'only' => ['create', 'store', 'edit', 'update', 'destroy']
]);
Route::post('admin/surveys/{id}/questions', ['uses' => 'Admin\SurveyController@storeQuestion', 'as' => 'admin.surveys.questions.store']);
Route::delete('admin/surveys/{survey_id}/questions/{question_id}', ['uses' => 'Admin\SurveyController@destroyQuestion', 'as' => 'admin.surveys.questions.destroy']);


// Public (surveys)
Route::get('surveys', 'SurveyController@getIndex');
Route::get('surveys/{id}', 'SurveyController@getSurvey');
Route::post('surveys/{id}', 'SurveyController@postSurvey');
Route::get('surveys/{id}/done', 'SurveyController@getSurveyDone');

//buat response
Route::resource('admin/respon', 'ResponseController');

//buat daerah
Route::resource('admin/daerah', 'DaerahController');




//     Route::get('/kuesioner', function() {
//         return view('questionpage.home');
//     });


//     // kategori
//     Route::get('/admin/kategori', 'KategoriController@index');
//     Route::resource('kategori', 'KategoriController');

//     //Kuesioner
//     Route::get('/admin/kuesioner', 'Kuesionercontroller@indexs');
//     Route::resource('kuesioner', 'KuesionerController');

//     //jawaban
//     Route::get('/isikuesioner', 'JawabanController@index');
//     Route::resource('jawaban', 'JawabanController');
});  
