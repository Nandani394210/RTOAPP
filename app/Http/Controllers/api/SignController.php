<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Sign;
use App\Traits\BaseTrait;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\File as TestingFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class SignController extends Controller
{
    public function listofSign()
    {
        $question= Sign::paginate(5);
        return view('web.question.questionbank',compact('question'));
    }
  use BaseTrait;

  public function signList(Request $request)
  {
    $validator=FacadesValidator::make($request->all(),[
      'limit'=>'sometimes|numeric',
      'offset' => 'sometimes|numeric',
      'lang' => 'required|string'
    ]);

    if($validator->fails())
    {
      return $this->sendValidationErrors($validator->errors());
    }

    $limit=$request->get('limit',10);
    $offset=$request->get('offset',0);
    $lang=$request->get('lang','guj');

    $response=Sign::where('lang',$lang)
    ->skip($offset)
    ->take($limit)
    ->get()
    ->toArray();

    if(!empty($response))
    {
      return $this->sendResponse("Signs Are listed",$response);
    }
    else{
      return $this->sendError("Data Not Found.");
    }
  }

}
