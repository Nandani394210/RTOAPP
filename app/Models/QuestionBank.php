<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
    use HasFactory;

    protected $table = 'question_bank';
    protected $fillable = [
        'question',
        'answer',
        'lang',
    ];
    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function getAnswerAttribute($answer){
        $answer= json_decode($answer,true);
        //print_r($answer);
        if(is_array($answer)){
            return implode(' ',$answer);
        }
        return $answer;

    }

    // public function getQuestionAttribute($question){
    //     $question= json_decode($question,true);

    //     if(is_array($question)){
    //         return $question;

    //     }
    //     return implode(' ',$question);

    //  }


}
        // $answer= json_decode($answer,true);
        // foreach($answer as $key => $value)
        //     {
        //         $answer[$key]=htmlspecialchars($value);

        //     }
        // return $answer;
