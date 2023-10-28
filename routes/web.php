<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\QuizController;
use App\Models\Quiz;

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
    return view('main');
});

Route::post('/subscribe', 'SubscriptionController@subscribe')->name('subscribe');

Route::get('/quizzes', [SubscriptionController::class, 'showQuizzes']);

Route::get('/quiz/list', function () {
    $quizzes = \App\Models\Quiz::all();
    return view('list', compact('quizzes'));
})->name('quiz.list');

Route::get('/quiz/{quiz?}', [CrudController::class, 'createOrUpdate'])->name('quiz.createOrUpdate');
Route::post('/quiz/{quiz?}', [CrudController::class, 'createOrUpdate'])->name('quiz.createOrUpdate');
Route::get('/quiz/create', [QuizController::class, 'create'])->name('quiz.create');
Route::get('/quiz/update/{id}', [QuizController::class, 'update'])->name('quiz.update');
Route::match(['post', 'put'], '/quiz/storeOrUpdate/{id?}', [QuizController::class, 'storeOrUpdate'])->name('quiz.storeOrUpdate');