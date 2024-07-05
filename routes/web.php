<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PersonnageController;
use App\Http\Controllers\ScenariosController;
use App\Http\Controllers\EnvironmentsController;
use App\Http\Controllers\ObjetsController;
use App\Http\Controllers\StoryboardController;
use App\Http\Controllers\EmployeeController;
use  App\Http\Controllers\OpenAIImageController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource("/student", StudentController::class);

// Routes 
Route::resource("/employees", EmployeeController::class);

Route::resource("/projects", ProjectController::class);
Route::get('projects/{project}/scenarios', [ScenariosController::class, 'index'])->name('projects.scenarios');
Route::get('projects/{project}/personnages', [PersonnageController::class, 'index'])->name('projects.personnages');
Route::get('projects/{project}/environments', [EnvironmentsController::class, 'index'])->name('projects.environments');
Route::get('projects/{project}/objects', [ObjetsController::class, 'index'])->name('projects.objects');
Route::get('projects/{project}/storyboards', [StoryboardController::class, 'index'])->name('projects.storyboard');

//Show  routes 

Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('projects/{project}/storyboards/{storyboard}', [StoryboardController::class, 'show'])->name('storyboards.show');


//Creation  routes 

Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::get('projects/{project}/scenarios/create', [ScenariosController::class, 'create'])->name('scenarios.create');
Route::get('projects/{project}/personnages/create', [PersonnageController::class, 'create'])->name('personnages.create');
Route::get('projects/{project}/storyboards/create', [StoryboardController::class, 'create'])->name('storyboards.create');
Route::get('projects/{project}/environments/create', [EnvironmentsController::class, 'create'])->name('environments.create');
Route::get('projects/{project}/objects/create', [EnvironmentsController::class, 'create'])->name('objects.create');


// Store routes 
Route::post('projects/{project}/scenarios', [ScenariosController::class, 'store'])->name('scenarios.store');
Route::post('projects/{project}/personnages', [PersonnageController::class, 'store'])->name('personnages.store');
Route::post('projects/{project}/storyboards', [StoryboardController::class, 'store'])->name('storyboards.store');
Route::post('projects/{project}/environments', [EnvironmentsController::class, 'store'])->name('environments.store');
Route::post('projects/{project}/objects', [ObjetsController::class, 'store'])->name('objects.store');


Route::post('OpenAIImageShow/', [OpenAIImageController::class, 'generate'])->name('image.generate');

Route::get('/createnew', function () {
    return view('createnew');
})->name('createnew');
Route::get('/aiprompt', function () {
    return view('aiprompt');
})->name('aiprompt');


Route::get('/createnew/scenarios', function () {
    return view('scenarios');
})->name('createnew.scenarios');

Route::get('/createnew/environments', function () {
    return view('environments');
})->name('createnew.environments');
Route::get('/createnew/objects', function () {
    return view('objects');
})->name('createnew.objects');
Route::get('/createnew/storyboard', function () {
    return view('storyboard');
})->name('createnew.storyboard');



Route::get('/sidebar', function () {
    return view('sidebar');
})->name('sidebar');

Route::get('/imagemotion', function () {
    return view('imagemotion');
})->name('imagemotion');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
