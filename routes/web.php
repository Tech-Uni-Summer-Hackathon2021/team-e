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

Route::get('/hello',function(){
  return view('hello');
});

Route::get('/top',function(){
  return view('top');
});

Route::post('/top',function(Request $request){
  $name = "value";
  return view("top");
});


Route::get(('/problem'),function(){
  return view("problem_list");
});

Route::get(('/problem-one'),function(){
  return view("/problem-one/problem_one");
});

Route::get(('/problem-two-one'),function(){
  return view("/problem-two/problem_two_one");
});

Route::get(('/problem-two-two'),function(){
  return view("/problem-two/problem_two_two");
});

Route::get(('/problem-two-three'),function(){
  return view("/problem-two/problem_two_three");
});

Route::get(('/problem-two-four'),function(){
  return view("/problem-two/problem_two_four");
});

Route::get(('/problem-two-five'),function(){
  return view("/problem-two/problem_two_five");
});

Route::get(('/problem-three-one'),function(){
  return view("/problem-three/problem_three_one");
});

Route::get(('/problem-three-two'),function(){
  return view("/problem-three/problem_three_two");
});

Route::get(('/problem-three-three'),function(){
  return view("/problem-three/problem_three_three");
});

Route::get(('/problem-three-four'),function(){
  return view("/problem-three/problem_three_four");
});

Route::get(('/problem-three-five'),function(){
  return view("/problem-three/problem_three_five");
});

Route::get(('/problem-four-one'),function(){
  return view("/problem-four/problem_four_one");
});

Route::get(('/problem-four-two'),function(){
  return view("/problem-four/problem_four_two");
});

Route::get(('/problem-four-three'),function(){
  return view("/problem-four/problem_four_three");
});

Route::get(('/problem-four-four'),function(){
  return view("/problem-four/problem_four_four");
});

Route::get(('/problem-four-five'),function(){
  return view("/problem-four/problem_four_five");
});

Route::get(('/problem-four-six'),function(){
  return view("/problem-four/problem_four_six");
});

Route::get(('/problem-four-seven'),function(){
  return view("/problem-four/problem_four_seven");
});

Route::get(('/problem-four-eight'),function(){
  return view("/problem-four/problem_four_eight");
});
