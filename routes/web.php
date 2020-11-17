<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('test', function(){
	$name = 'LANA';
	dd($name);
});

Route::get('love', function(){
	$Lana = 'Love';
	dd($Lana);
});

/* Redirect ->route(name ,destination, status) */

Route::get('blog',function() {
	/*?>$name = "Ahmed";
	dd($name);<?php */
	return redirect()->route('my_new_blog');
		
});

Route::get('new_blog',function() {
	$name = "Lana";
	dd($name);
})->name('my_new_blog');


/* Prefix & Middleware */

Route::prefix('admin')->group(function(){
	Route::get('dashboard',function(){
		$name = "Ahmed Love Lana" ;
		dd($name);
	});

	Route::get('product',function(){

	});

	Route::get('categories',function(){

	});
	Route::prefix('users')->group(function(){
		Route::get('profile',function(){
			$name = "Ahmed Love La" ;
			dd($name);
		});
	});
});

Route::middleware(['auth'])->group(function(){
	Route::get('dashboard',function(){
		
	});
});

/* Rate limited of request -> throttle:How many request,how many mins */

Route::middleware('throttle:3,1')->group(function(){
	Route::get('admin',function(){
		
	});
});

























