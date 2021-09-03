<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SampleController;


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






Route::get(('/problem'),function(){
  return view("problem_list");
})->middleware('auth');

Route::get(('/problem-one'),function(){
  return view("/problem-one/problem_one");
})->middleware('auth');;

Route::get(('/problem-two-one'),function(){
  return view("/problem-two/problem_two_one");
})->middleware('auth');;

Route::get(('/problem-two-two'),function(){
  return view("/problem-two/problem_two_two");
})->middleware('auth');;

Route::get(('/problem-two-three'),function(){
  return view("/problem-two/problem_two_three");
})->middleware('auth');;

Route::get(('/problem-two-four'),function(){
  return view("/problem-two/problem_two_four");
})->middleware('auth');;

Route::get(('/problem-two-five'),function(){
  return view("/problem-two/problem_two_five");
})->middleware('auth');;

Route::get(('/problem-three-one'),function(){
  return view("/problem-three/problem_three_one");
})->middleware('auth');;

Route::get(('/problem-three-two'),function(){
  return view("/problem-three/problem_three_two");
})->middleware('auth');;

Route::get(('/problem-three-three'),function(){
  return view("/problem-three/problem_three_three");
})->middleware('auth');;

Route::get(('/problem-three-four'),function(){
  return view("/problem-three/problem_three_four");
})->middleware('auth');;

Route::get(('/problem-three-five'),function(){
  return view("/problem-three/problem_three_five");
})->middleware('auth');;

Route::get(('/problem-four-one'),function(){
  return view("/problem-four/problem_four_one");
})->middleware('auth');;

Route::get(('/problem-four-two'),function(){
  return view("/problem-four/problem_four_two");
})->middleware('auth');;

Route::get(('/problem-four-three'),function(){
  return view("/problem-four/problem_four_three");
})->middleware('auth');;

Route::get(('/problem-four-four'),function(){
  return view("/problem-four/problem_four_four");
})->middleware('auth');;

Route::get(('/problem-four-five'),function(){
  return view("/problem-four/problem_four_five");
})->middleware('auth');;

Route::get(('/problem-four-six'),function(){
  return view("/problem-four/problem_four_six");
})->middleware('auth');;

Route::get(('/problem-four-seven'),function(){
  return view("/problem-four/problem_four_seven");
})->middleware('auth');;

Route::get(('/problem-four-eight'),function(){
  return view("/problem-four/problem_four_eight");
})->middleware('auth');;

Route::get(('/problem-five-one'),function(){
  return view("/problem-five/problem_five_one");
})->middleware('auth');;
Route::get(('/problem-five-two'),function(){
  return view("/problem-five/problem_five_two");
})->middleware('auth');;

Route::post('/problems', 'App\Http\Controllers\SampleController@final');

Route::get('/profile', 'App\Http\Controllers\SampleController@final99')->middleware('auth');



Route::post('/result11', 'App\Http\Controllers\SampleController@result11');
Route::post('/result21', 'App\Http\Controllers\SampleController@result21');
Route::post('/result22', 'App\Http\Controllers\SampleController@result22');
Route::post('/result23', 'App\Http\Controllers\SampleController@result23');
Route::post('/result24', 'App\Http\Controllers\SampleController@result24');
Route::post('/result25', 'App\Http\Controllers\SampleController@result25');
Route::post('/result31', 'App\Http\Controllers\SampleController@result31');
Route::post('/result32', 'App\Http\Controllers\SampleController@result32');
Route::post('/result33', 'App\Http\Controllers\SampleController@result33');
Route::post('/result34', 'App\Http\Controllers\SampleController@result34');
Route::post('/result35', 'App\Http\Controllers\SampleController@result35');
Route::post('/result41', 'App\Http\Controllers\SampleController@result41');
Route::post('/result42', 'App\Http\Controllers\SampleController@result42');
Route::post('/result43', 'App\Http\Controllers\SampleController@result43');
Route::post('/result44', 'App\Http\Controllers\SampleController@result44');
Route::post('/result45', 'App\Http\Controllers\SampleController@result45');
Route::post('/result46', 'App\Http\Controllers\SampleController@result46');
Route::post('/result47', 'App\Http\Controllers\SampleController@result47');
Route::post('/result48', 'App\Http\Controllers\SampleController@result48');
Route::post('/result51', 'App\Http\Controllers\SampleController@result51');
Route::post('/result52', 'App\Http\Controllers\SampleController@result52');








/*---------------------------------------*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
