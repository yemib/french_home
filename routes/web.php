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

use Illuminate\Http\Request;
//use Tutorialspoint\database_my;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Tutorialspoint\admins;
use Tutorialspoint\gallery;
use Tutorialspoint\Http\Controllers\JournalController;
use Tutorialspoint\Menu;

Route::get('event', function () {


	return  view('news');
});



Route::get('/',  function () {
	 

	return  view('home2');
});




Route::get('/2',  function () {
	return  view('home2');
});

Route::get('/about2',  function () {
	return  view('about2');
});


Route::get('/management',  function () {
	return  view('management');
});









Route::post('/logins',  function (Request $request) {

	$checking = 	admins::where('username', $request->username)->where('password',   $request->password)->count();

	if ($checking   > 0) {

		//set the session  ok		
		$request->session()->put('admin',  $request->username);

		return redirect('/admins');
	} else {

		$error = 'wrong password or email address';
		return redirect('/admin_signin')->with('error', $error);
	}
});




Route::get('page/{id}/{name}',  function ($id, $name) {


	$all = array('id' => $id, 'name' => $name);
	return  view('about')->with($all);
});




Route::get('department/{id}/{department}',  function ($id, $department) {


	$all = array('id' => $id, 'department' => $department);
	return  view('about')->with($all);
});







Route::get('newsletter/{id}/{name}',  function ($id, $name) {


	$all = array('id' => $id, 'name' => $name);
	return  view('services')->with($all);
});




Route::get('/gallery_view',  function () {

	    $galleries = gallery::where('publish', 'yes')->latest()->paginate(9);
	return  view('gallery')->with('galleries', $galleries);
});




Route::get('/staff/{category}',  function ($category) {


	return  view('board')->with('category', $category);
});






Route::get('/contact-us',  function () {
	return  view('contact-us');
});





Route::get('/admins',  function () {

	return  view('admin_folder/home');
})->middleware('article');







Route::resources([
	'newsletters' => 'service',
	'post' => 'post',
	'pages' => 'pages',
	'slidder' => 'slidder',
	'users' => 'users',
	'contact' => 'contact',
	'logo' => 'logo',
	'menu' => 'menu',
	'managements' => 'managements',
	'gallery' => 'galleries',
	'board' => 'boards',





]);




Route::get('/admin_signin', function () {

	return view('admin_folder/login');
});


Route::get('/logout', function (Request $request) {

	// logout
	$request->session()->forget('admin');


	return view('admin_folder/login');
});


Route::get('/admins',  function () {

	return  view('admin_folder/home');
})->middleware('article');



Route::post('/large_file',  function (Request $request) {
	//upload the file here period okay  


	$image = $request->file('others');
	$getsize =  $image->getSize();
	$original_name = $image->getClientOriginalName();
	$new_name = rand() . '.' . $image->getClientOriginalExtension();
	$real_path  =   $image->getRealPath();
	$image->move(public_path('uploads'), $new_name);




	if ($image->getClientOriginalExtension() ==  'mp4'  or $image->getClientOriginalExtension() ==  'mp3') {


		return response()->json([
			'message'   =>    '<video  src="/uploads/' . $new_name . '"   style="width: 100%"    controls   />',
			'file_name'   => $original_name

		]);
	} else {

		return response()->json([
			'message'   => '<a  class="btn btn-primary"    href="/uploads/' . $new_name . '"  target="_top"   > ' . $original_name . ' </a>',

			'file_name'   => $original_name

		]);
	}
})->middleware('article');



//journal routes  

// routes/web.php

Route::get('/journals', "HomeJournal@journals")->name('home.journals.journals');
Route::get('/admins/journals', "JournalController@index")->name('admin.journals.index');
Route::get('/admins/journals/list', "JournalController@list")->name('admin.journals.list');
Route::post('/admins/journals/store', "JournalController@store")->name('admin.journals.store');
Route::post('/admins/journals/update/{id}', "JournalController@update")->name('admin.journals.update');
Route::delete('/admins/journals/delete/{id}', "JournalController@destroy")->name('admin.journals.destroy');
Route::post('/admins/journals/toggle/{id}', "JournalController@togglePublish")->name('admin.journals.toggle');
Route::post('/admins/journals/reorder', "JournalController@reorder")->name('admin.journals.reorder');
Route::post('/admins/journals/update/{id}', "JournalController@update")->name('admin.journals.update');
Route::get('/admins/journals/download/{id}', "JournalController@download")->name('admin.journals.download');

/* menu routes */



Route::get('/admins/menus', 'MenuController@index')->name('admin.menus.index');
Route::get('/admins/menus/list', 'MenuController@list')->name('admin.menus.list');

Route::post('/admins/menus/store', 'MenuController@store')->name('admin.menus.store');
Route::post('/admins/menus/update/{id}', 'MenuController@update')->name('admin.menus.update');

Route::post('/admins/menus/order', 'MenuController@updateOrder')->name('admin.menus.order');
Route::post('/admins/menus/toggle/{id}', 'MenuController@toggle')->name('admin.menus.toggle');

Route::delete('/admins/menus/{id}', 'MenuController@destroy')->name('admin.menus.destroy');



Route::get('/admins/sections', "SectionController@index")->name('admin.sections.index');
Route::get('/admins/sections/list', "SectionController@list")->name('admin.sections.list');
Route::post('/admins/sections/store', "SectionController@store")->name('admin.sections.store');
Route::post('/admins/sections/update/{id}', "SectionController@update")->name('admin.sections.update');
Route::delete('/admins/sections/delete/{id}', "SectionController@destroy")->name('admin.sections.destroy');
Route::post('/admins/sections/toggle/{id}', "SectionController@togglePublish")->name('admin.sections.toggle');
Route::post('/admins/sections/reorder', "SectionController@reorder")->name('admin.sections.reorder');
Route::post('/admins/sections/update/{id}', "SectionController@update")->name('admin.sections.update');

