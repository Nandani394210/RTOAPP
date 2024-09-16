<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Traits\QuestionTrait;
use App\Traits\BaseTrait;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class QuestionController extends Controller
{
    public function showQuestions()
    {

        $question=Question::all();
        return view('web.exam.exam',compact('question'));
    }
    use BaseTrait;

    public function questionList(Request $request)
    {
        $validator = FacadesValidator::make($request->all(),[
            'limit' => 'sometimes|numeric',
            'offset' => 'sometimes|numeric',
            'lang' => 'required|string|in:eng,guj'
        ]);
        if($validator->fails()){
            return $this->sendValidationErrors($validator->errors());
        }

        $limit = $request->get('limit',10);
        $offset = $request->get('offset',0);
        $lang = $request->get('lang','guj');
        $response = Question::where('lang',$lang)
        ->skip($offset)
        ->take($limit)
        ->get()
        ->toArray();

        if(!empty($response)){
            return $this->sendResponse("Question list",$response);
        }else{
            return $this->sendError("Data not found !");
        }
    }


    public function queTrait()
    {
        $question=$this->getQueTraits();
        return $question;
    }

    public function jsonRes()
    {
        $question=Question::all();
        return $question;
    }
    public function showResp(){

        $question = Question::first();
        return response()->json($question,);
    }
    public function showQuestion()
    {
        //$question = Question::all();
        //  return $question;

      //  return response()->json(['message'=>'response success.'],200);
        // // //return response()->json(['success' => true],200);

        //$question = Question:: all();
        // $question = Question::where('lang','eng')->paginate(
        //     $perPage = 5, $columns=['*'], $pageName='question'
        // );



        $question = Question::where('lang','eng')->paginate(5);
        return view('p1',compact('question'));

        $question = Question::where('lang','guj')->paginate(5);
        return view('p1',compact('question'));



        // // $question = Question::where('lang','eng')->simplePaginate(5);
       // $question = Question::samplePaginate(5);
    //  $question = DB::table('questions')->orederBy('id')->cursorPaginate(5);
       // $question = Question::where('lang','eng')->cursorPaginate(5);
      //  return view('p1',compact('question'));
     //  foreach($question as $que){
       //     return compact('question');
       //}
        // return $question;
       // return view('p1',compact('question'));
        //echo $question;


        //$question = Question:: where('id', 5)->first();

        //$question = Question::all()->where('id','<', 5);


        //print_r($question);
        // echo '<pre>'; print_r($question); echo '<pre>';

        //$question = Question:: get();
        // $question = Question:: where('id',4) ->get();
        //echo $question;
        // foreach($question as $key=> $value)
        // {
        //     echo $question;
        //     //echo " :  $key => $value <br>"; //-> id;
        //   //  echo $value->id."<br>";
        // }

        //return($question);
        //return view('p1',compact('question'));


    }
}
