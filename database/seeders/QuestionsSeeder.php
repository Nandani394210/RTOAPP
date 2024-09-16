<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Sign;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::truncate();
        // ENGLISH DATA
        $engArray = json_decode(file_get_contents(public_path('rto_eng.json')),true);
        $engArray = array_map(function ($eng){
            if(!empty($eng['image'])){
                $imageName = basename($eng['image']);
            }
            return [
                'question' => $eng['question'],
                'image' => $imageName??null,
                'option_a' => $eng['option_a'],
                'option_b' => $eng['option_b'],
                'option_c' => $eng['option_c'],
                'answer' => $eng['ans'],
                'lang' => 'eng',
                'created_at' => now(),
                'updated_at' => now()
            ];
        },$engArray);
        Question::insert($engArray);

        // GUJARATI DATA
        $gujArray = json_decode(file_get_contents(public_path('rto_guj.json')),true);
        $gujArray = array_map(function ($guj){
            if(!empty($guj['image'])){
                $imageName = basename($guj['image']);
            }
            return [
                'question' => $guj['question'],
                'image' => $imageName??null,
                'option_a' => $guj['option_a'],
                'option_b' => $guj['option_b'],
                'option_c' => $guj['option_c'],
                'answer' => $guj['ans'],
                'lang' => 'guj',
                'created_at' => now(),
                'updated_at' => now()
            ];
        },$gujArray);
        Question::insert($gujArray);
    }
}
