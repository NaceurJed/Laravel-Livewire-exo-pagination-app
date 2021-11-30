<?php

// use App\Models\Student;
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
    // On va passer une variable students dans la vue qui va contenir toutes les données de la table students
    //return view('welcome', ['students' => Student::all()]); // !!! importer la class Student
     
    // Mais au lieu d'importer toute la base on va faire une pagination
    // return view('welcome', ['students' => Student::paginate(10)]);

    //Aprés installation de livewire, on ne va plus passer notre variable à la vue welcome mais on passe par le composant StudentList.php
    return view('welcome');
});
