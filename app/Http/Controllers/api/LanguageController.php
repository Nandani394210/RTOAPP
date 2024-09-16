<?php
namespace App\Http\Controllers\api;

use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function langSwitch(Request $request) {

        // session()->forget('locale');
        // app()->setLocale(session()->forget('locale'));
        // session()->forget('selectedLang');
        $selectedLang=$request->input('language');
        // dd($selectedLang);
        session()->put('selectedLang',$selectedLang);

        // $selectedLang=$request->input('language');
        // // dd($selectedLang);
        // session()->put('selectedLang',$selectedLang);
        // dd(session('locale'));
        // dd(session('selectedLang'));
        $locale=$request->language;
        // dd($locale);
        if(array_key_exists($locale, config('app.locales')))
        {
            // dd($locale);
                session(['locale'=>$locale]);
                // dd($locale);
                // dd(session()->has('locale'));
                if(session()->has('locale'))
                {
                    app()->setLocale(session('locale'));
                    // dd(session('locale'));
                    // dd($a);
                }
        }
        // else{
        //     session()->forget('locale');
        // }
        return back();
    }
}
