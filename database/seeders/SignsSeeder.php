<?php

namespace Database\Seeders;

use App\Models\QuestionBank;
use App\Models\Sign;
use Illuminate\Database\Seeder;

class SignsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sign::truncate();
        // ENGLISH DATA
        $engArray = json_decode(file_get_contents(public_path('english-singh.json')),true);
        $engArray = array_map(function ($eng){
            // $img = file_get_contents($eng['image']);
            $imageName = basename($eng['image']);
            // file_put_contents(public_path("uploads/$imageName"),$img);
            return [
                'title' => $eng['detail'],
                'image' => $imageName,
                'lang' => 'eng',
                'created_at' => now(),
                'updated_at' => now()
            ];
        },$engArray);
        Sign::insert($engArray);

        // GUJARATI DATA
        $gujArray = json_decode(file_get_contents(public_path('gujrati_sing.json')),true);
        $gujArray = array_map(function ($guj){
            // $img = file_get_contents($guj['image']);
            $imageName = basename($guj['image']);
            // file_put_contents(public_path("uploads/$imageName"),$img);
            return [
                'title' => $guj['detail'],
                'image' => $imageName,
                'lang' => 'guj',
                'created_at' => now(),
                'updated_at' => now()
            ];
        },$gujArray);
        Sign::insert($gujArray);
    }
}
