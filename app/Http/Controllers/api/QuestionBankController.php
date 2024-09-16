<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionBank;
use App\Models\Sign;
use App\Traits\BaseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class QuestionBankController extends Controller
{
    public function listofQuestion(Request $request)
    {

        // session()->forget('selectedLang');
        //Determine the user's preferred language
        $lang=session()->get('selectedLang','eng');
        // dd($lang);
        $selectedLang = $request->session()->get('selectedLang',$lang);
        // dd($preferredLang);

        //retrieve based on selection
        $question=QuestionBank::where('lang',$selectedLang)->get();

        $sign=Sign::where('lang',$selectedLang)->get();

        return view('web.question.questionbank',compact('question'),compact('sign'));
    }
}
