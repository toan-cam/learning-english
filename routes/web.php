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

Route::get('/', 'Frontend\FrontendController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * Admin Route
 */
Route::group(['middleware' => ['role:admin']], function() {
	
	Route::get('admin', 'Admin\AdminController@index');
});

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
	//User Route
	Route::get('/user', 'Admin\UserController@index');
	Route::get('/user/create', 'Admin\UserController@create');
	Route::get('/user/edit/{id}', 'Admin\UserController@edit');
	Route::post('/user/update', 'Admin\UserController@update');
	Route::get('/user/delete/{id}', 'Admin\UserController@delete');

	//Role Route
	Route::get('/role','Admin\RoleController@index');
	Route::get('/role/create','Admin\RoleController@create');
	Route::get('/role/edit/{id}','Admin\RoleController@edit');
	Route::post('/role/update','Admin\RoleController@update');
	Route::get('/role/delete/{id}','Admin\RoleController@delete');

	//Permission Route
	Route::get('/permission','Admin\PermissionController@index');
	Route::get('/permission/create','Admin\PermissionController@create');
	Route::get('/permission/edit/{id}','Admin\PermissionController@edit');
	Route::post('/permission/update','Admin\PermissionController@update');
	Route::get('/permission/delete/{id}','Admin\PermissionController@delete');

	//Phrases Route
	Route::get('/phrases','Admin\PhrasesController@index');
	Route::get('/phrases/create','Admin\PhrasesController@create');
	Route::get('/phrases/edit/{id}','Admin\PhrasesController@edit');
	Route::post('/phrases/update','Admin\PhrasesController@update');
	Route::get('/phrases/delete/{id}','Admin\PhrasesController@delete');

	//Categories phrases Route
	Route::get('/cat-phrases','Admin\Categories_phrasesController@index');
	Route::get('/cat-phrases/create','Admin\Categories_phrasesController@create');
	Route::get('/cat-phrases/edit/{id}','Admin\Categories_phrasesController@edit');
	Route::post('/cat-phrases/update','Admin\Categories_phrasesController@update');
	Route::get('/cat-phrases/delete/{id}','Admin\Categories_phrasesController@delete');

	//Word Route
	Route::get('word','Admin\WordController@index');
	Route::get('/word/create','Admin\WordController@create');
	Route::get('/word/edit/{id}','Admin\WordController@edit');
	Route::post('/word/update','Admin\WordController@update');
	Route::get('/word/delete/{id}','Admin\WordController@delete');

});

/*
 * Admin Menu
 */
Menu::make('admin_menu', function($menu){
  
	$menu->add('View site')->attr(array('it-icon' => 'home'));
	$menu->add('Dashboard', 'admin')->attr(array('it-icon' => 'dashboard'))->link->active();

	//User
	$menu->add('User Manage', '#')->attr(array('it-icon' => 'user-md'));
	$menu->userManage->add('Users',    'admin/user')->attr(array('it-icon' => 'user'))->active('admin/user/*');
	$menu->userManage->add('Roles', 'admin/role')->attr(array('it-icon' => 'user-times'))->active('admin/role/*');
	$menu->userManage->add('Permissions', 'admin/permission')->attr(array('it-icon' => 'user-plus'))->active('admin/permission/*');

	//Phrase
	$menu->add('Manage Phrases', '#')->attr(array('it-icon' => 'pencil-square-o'));
	$menu->managePhrases->add('All Phrases', 'admin/phrases')->attr(array('it-icon' => 'globe'))->active('admin/phrases/*');
	$menu->managePhrases->add('Categories Phrases', 'admin/cat-phrases')->attr(array('it-icon' => 'list-alt'))->active('admin/cat-phrases/*');

	//Word
	$menu->add('Manage Word', 'admin/word')->attr(array('it-icon' => 'file-word-o'))->active('admin/word/*');
  
});

/*
 * Frontend Route
 */
// Phrases Route
Route::get('phrases', 'Frontend\PhrasesController@index');
Route::post('phrases/add', 'Frontend\PhrasesController@add');
Route::get('phrases/storgage', 'Frontend\PhrasesController@storgage');
Route::post('phrases/remove', 'Frontend\PhrasesController@remove');
Route::get('phrases/learn/engtoviet', 'Frontend\PhrasesController@engtoviet');
Route::get('phrases/learn/viettoeng', 'Frontend\PhrasesController@viettoeng');

// Profile
Route::get('profile', 'Frontend\FrontendController@profile');
Route::post('profile/update', 'Frontend\FrontendController@update_profile');