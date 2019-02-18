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
Route::get('/', function () {
    return view('welcome');
});
Route::resource('aluno','AlunoController');
Route::resource('professor','ProfessorController');
Route::resource('curso','CursoController');


Route::get('/pdf', function () {
	return view('pdf');
});

