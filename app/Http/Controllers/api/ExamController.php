<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Session as FacadesSession;
use LDAP\Result;
use Session;
use Illuminate\Support\Facades\Validator;

class ExamController extends Controller
{
    public function showExam(Request $request)
    {

        // session()->forget('selectedLang');
        session()->forget('correct_answer');
        session()->forget('wrong_answer');
        return view('web.exam.exam');
    }

    public function getQuestion(Request $request)
    {
        $question_id=session('question_id');
        $lang=session()->get('selectedLang','eng');
        // dd($lang);
        $selectedLang = $request->session()->get('selectedLang',$lang);
        // dd($selectedLang);//
        $questions = Question::where('lang', $selectedLang)
        ->where('id','!=', $question_id)
            ->inRandomOrder()
            ->take(1)
            ->get();

        // dd($questions);
        if($questions->isNotEmpty()){
       session(['question_id'=>$questions[0]->id]);
        }
        return response()->json(['questions' => $questions]);
    }

    public function submitIfAnswerNull(Request $request){

        $question_id=session('question_id');
        // $question_text=session('question_text');
        $answer=$request->input('Questioncheckbox');
        // $ans=$request->
        $is_null_answer=empty($answer);
         // Get the current question
         $question=Question::find($question_id);

         //Check if the question exists
        if(!$question){
            return response()->json(['error'=>'question is not found'], 404);
        }
        $dbanswer=trim($question->answer);
        // $is_correct = $dbanswer === $fanswer;
        $is_correct=$is_null_answer ? false:$dbanswer === $answer;

        //Increment the correct and wrong answer counter if the answer is correct
        if($is_correct){
            session()->increment('correct_answer');
        }
        else{
            session()->increment('wrong_answer');
        }
        $correctAnswersCount=session('correct_answer',0);
        $wrongAnswersCount=session('wrong_answer',0);

        // $question_text=session('question_text');
        $image=$question->image;
        $danswer=$question->answer;
        $question_txt=$question->question;
        // dd($question_txt);

        $questions=[
            // 'nextQuestion' => $this->getQuestion($request),
                'correctAnswersCount' => $correctAnswersCount,
                'wrongAnswersCount' => $wrongAnswersCount,
                // 'question_text' => $question_text,
                'question_txt' => $question_txt,
                'image'=>$image,
                'answer'=>$danswer,
                'Uanswer'=>$answer,
        ];

        return response()->json(['questions' => $questions]);
        // return response()->json([
        //     // 'nextQuestion' => $this->getQuestion($request),
        //     'correctAnswersCount' => $correctAnswersCount,
        //     'wrongAnswersCount' => $wrongAnswersCount,
        //     // 'question_text' => $question_text,
        //     'question_txt' => $question_txt,
        //     'image'=>$image,
        //     'answer'=>$danswer,
        //     'Uanswer'=>$answer,
        //     ]);
    }

    public function submitIfAnswerSelected(Request $request)
    {
        $question_id=session('question_id');
        // dd($question_id);
        // $question_text=session('question_text');

        $answer=$request->input('Questioncheckbox');
        // $uanswer=implode('',$answer);

        $uanswer=is_array($answer) ? implode(',',$answer):$answer;
        // Get the current question
        $question=Question::find($question_id);
        //  dd($question);

        //Check if the question exists
        if(!$question){
            return response()->json(['error'=>'question is not found'], 404);
        }
        $dbanswer=trim($question->answer);

        //comparing the stored answer and given answer
        $is_correct = $dbanswer === $uanswer;

        //Increment the correct and wrong answer counter if the answer is correct
        if($is_correct){
            session()->increment('correct_answer');
        }
        else{
            session()->increment('wrong_answer');
        }
        $correctAnswersCount=session('correct_answer',0);
        $wrongAnswersCount=session('wrong_answer',0);

        $question_txt=$question->question;
        $image=$question->image;
        $danswer=$question->answer;

        $questions=[
            // 'nextQuestion' => $this->getQuestion($request),
                'correctAnswersCount' => $correctAnswersCount,
                'wrongAnswersCount' => $wrongAnswersCount,
                // 'question_text' => $question_text,
                'question_txt' => $question_txt,
                'image'=>$image,
                'answer'=>$danswer,
                'Uanswer'=>$uanswer,
        ];

        return response()->json(['questions' => $questions]);
        // return response()->json([
        // // 'nextQuestion' => $this->getQuestion($request),
        //     'correctAnswersCount' => $correctAnswersCount,
        //     'wrongAnswersCount' => $wrongAnswersCount,
        //     // 'question_text' => $question_text,
        //     'question_txt' => $question_txt,
        //     'image'=>$image,
        //     'answer'=>$danswer,
        //     'Uanswer'=>$uanswer,
        // ]);

    }

    public function submitQuestionAnswer(Request $request){

        $question_id=session('question_id');
        // dd($question_id);
        $question_text=session('question_text');


        $answer=$request->input('Questioncheckbox');
        if(empty($answer)){
            return $this->submitIfAnswerNull($request);
        }
        else{
            return $this->submitIfAnswerSelected($request);
        }
    }

    public function submitAnswer(Request $request)
    {
        $question_id=session('question_id');
        // dd($question_id);

        // $answer=$request->input('Questioncheckbox');
        // // $ans=$request->
        // if($answer == true){
        //     $answer="checked";
        // }
        // else{
        //     $answer="unchecked";
        //     $answer="null";
        // }

        $answer=$request->input('Questioncheckbox');
        $uanswer=implode('',$answer);

        // Get the current question
        $question=Question::find($question_id);
        //  dd($question);

        //Check if the question exists
        if(!$question){
            return response()->json(['error'=>'question is not found'], 404);
        }

        $dbanswer=trim($question->answer);
        $fanswer=trim($uanswer);
        // dd($dbanswer, $uanswer);


         $is_correct = $dbanswer === $fanswer;

        //Increment the correct and wrong answer counter if the answer is correct
        if($is_correct){
            session()->increment('correct_answer');
        }
        else{
            session()->increment('wrong_answer');
        }

        $correctAnswersCount=session('correct_answer',0);
        $wrongAnswersCount=session('wrong_answer',0);

            return response()->json([
            // 'nextQuestion' => $this->getQuestion($request),
                'correctAnswersCount' => $correctAnswersCount,
                'wrongAnswersCount' => $wrongAnswersCount,
            ]);
    }
    public function final()
    {
        return view('web.exam.final');
    }
}
