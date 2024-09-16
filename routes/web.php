<?php

use App\Http\Controllers\api\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\QuestionBankController;
use App\Http\Controllers\api\SignController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\HomeController;
use App\Models\Question;
use App\Models\QuestionBank;
use App\Http\Controllers\api\ExamController;
use App\Http\Controllers\api\LanguageController;
use App\Http\Controllers\api\SettingController;
use Carbon\Language;
use GuzzleHttp\Psr7\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

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

Route::get('/translate',function(){
    $lang=new GoogleTranslate('en');
    return $lang->setSource('en')->setTarget('fr')->translate("hello welcome world");
});

// Route::get('/home','HomeController@showlang')->middleware('translate');
// Route::get('/',[HomeController::class,'showlang'])->name('lang')->middleware('translate');
Route::post('locale',[LanguageController::class,'langSwitch'])->name('lang');
Route::get('/',[HomeController::class,'showHome'])->name('home');
// Route::post('/',[HomeController::class,'langSwitch'])->name('lang');
// Route::post('{locale?}',[HomeController::class,'langSwitch'])->name('lang');

Route::post('/store-data',[SettingController::class,'handleForm'])->name('store-data');
// Route::post('/store-newsletter',[SettingController::class,'handleForm'])->name('store-newsletter');
Route::post('/store-newsletter',[HomeController::class,'storeNewsletters'])->name('store-newsletter');
Route::get('/questionbank',[QuestionBankController::class,'listofQuestion'])->name('questionbank');

Route::get('/exam',[ExamController::class,'showExam'])->name('exam');
Route::get('/exam/getQuestion',[ExamController::class,'getQuestion'])->name('exam.getQuestion');

Route::post('/exam/submit-answer',[ExamController::class,'submitQuestionAnswer'])->name('exam.submit-answer');
Route::get('/exam/final',[ExamController::class,'final'])->name('exam.final');

Route::get('/setting',[SettingController::class,'showSetting'])->name('setting');
Route::post('/setting/store-newsletter',[SettingController::class,'storeNewsletters'])->name('store-newsletter');
Route::post('/setting/store-contact',[SettingController::class,'storeContact'])->name('store-contact');
// Route::post('/setting/store-newsletter',[SettingController::class,'storeNewsletters'])->name('store-newsletter');

Route::get('/setting/{url}',[SettingController::class,'formUrls'])->name('setting.form-url')->where('url','.*');

// Route::get('/', function () {
//     return view('web.dashboard.index');
// });

// Route::get('/questionbank', function () {
//     return view('web.dashboard.questionbank');
// });

// Route::get('/exam', function () {
//     return view('web.dashboard.exam');
// });

// Route::get('/setting', function () {
//     return view('web.dashboard.setting');
// });
