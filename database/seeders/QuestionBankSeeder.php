<?php

namespace Database\Seeders;

use App\Models\QuestionBank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class QuestionBankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        QuestionBank::truncate();
        // ENGLISH DATA
        $engArray = json_decode(file_get_contents(public_path('english-question.json')),true);
        $engArray = array_map(function ($eng){
            return [
                'question' => $eng['question'],
                'answer' => json_encode($eng['answer']),
                'lang' => 'eng',
                'created_at' => now(),
                'updated_at' => now()
            ];
        },$engArray);
        QuestionBank::insert($engArray);

        // GUJARATI DATA
        $gujArray = json_decode(file_get_contents(public_path('gujrati_question.json')),true);
        $gujArray = array_map(function ($guj){
            return [
                'question' => $guj['question'],
                'answer' => json_encode($guj['answer'],JSON_UNESCAPED_UNICODE),
                'lang' => 'guj',
                'created_at' => now(),
                'updated_at' => now()
            ];
        },$gujArray);
        QuestionBank::insert($gujArray);

    }
}
