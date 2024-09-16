<?php

use App\Http\Controllers\api\ExamController;
use Illuminate\Http\Request;
use App\Http\Controllers\api\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Models\Question;
use App\Http\Controllers\api\QuestionBankController;
use App\Http\Controllers\api\SignController;
use App\Models\Sign;

// ExamController

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('question',[QuestionController::class,'questionList']);
Route::get('questionBank',[QuestionBankController::class,'quesBankList']);
Route::get('sign',[SignController::class,'signList']);
Route::get('imageshow',[SignController::class,'getImage']);

// Route::get('exam',[ExamController::class,'getQuestion']);

