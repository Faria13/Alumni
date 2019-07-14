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

// Route::get('/', function () {
//     return view('welcome');
// });


//Front-end
Route::get('/about','HomeController@about');
Route::get('/','HomeController@index');
Route::get('/committee','HomeController@committee');
Route::get('/alumni_list','HomeController@alumni_list');
Route::get('/public_post', 'UserController@public_post');

//Photo-Gallery
Route::get('/photo_gallery', 'UserController@photo_gallery');
Route::get('/albums', 'AlbumsController@index');
Route::get('/albums/create', 'AlbumsController@create');
Route::get('/albums/{id}', 'AlbumsController@show');
Route::post('/albums/store', 'AlbumsController@store');
Route::get('/alumni_profile/{id}','UserController@alumni_profile');
Route::get('/photos/create/{id}','PhotoController@create');
Route::post('/photos/store','PhotoController@store');
Route::get('/photos','PhotoController@photos');

/*
//reset password
Route::get('password',['as'=>'password.resetsss',
'uses'=>'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/email',['as'=>'password.email',
'uses'=>'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('password/reset/{token?}',['as'=>'password.resetform',
'uses'=>'Auth\ResetPasswordController@showResetForm']);
Route::post('password/resetemail',['as'=>'password.nowreset',
'uses'=>'Auth\ResetPasswordController@reset']);
*/

Route::group(['middleware'=>'guest'],function(){
	Route::get('/user_login','HomeController@user_login');
	Route::get('/reset_password','HomeController@reset_password');
	Route::post('/reset_password','UserController@reset_password');
	Route::post('/user_login','UserController@user_login');
	Route::post('/UserRegistration','UserController@user_registration');
	Route::get('/user_registration','HomeController@user_registration');
	Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');
});
Route::group(['middleware'=>'auth'],function(){
	Route::get('/user_profile','HomeController@user_profile');
	Route::get('/job_post','HomeController@job_post');
	Route::post('/job_post','UserController@job_post');
	Route::get('/user_logout','UserController@user_logout');
	Route::post('/user_profile','UserController@user_profile')->name('user_profile');
	Route::post('/user_introduction','UserController@user_introduction');
	Route::post('/user_education','EducationController@user_education');
	Route::post('/user_location','LocationController@user_location');
	Route::post('/user_experience','ExperienceController@user_experience');
	Route::post('/user_skills','SkillController@user_skills');
	//edit/update
	Route::get('/edit_profile/{id}','HomeController@edit_profile');
	Route::post('/update_user_profile','UserController@update_user_profile');
	Route::post('/update_user_introduction','UserController@update_user_introduction');
	Route::post('/update_user_education','EducationController@update_user_education');
	Route::post('/update_user_experience','ExperienceController@update_user_experience');
	Route::post('/update_user_skills','SkillController@update_user_skills');
	Route::post('/update_user_location','LocationController@update_user_location');
	Route::get('/user_settings','UserController@change_password');
	Route::post('/user_settings','UserController@change_password');
	Route::get('/new_password','UserController@new_password');

});

Route::auth();

//Admin

Route::get('/admin','AdminController@admin_login');
Route::get('/dashboard','AdminController@index');
Route::post('/dashboard','AdminController@dashboard');
Route::get('/admin_logout', 'AdminController@admin_logout');