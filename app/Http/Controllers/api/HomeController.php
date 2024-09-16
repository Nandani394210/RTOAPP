<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Nette\Utils\Strings;
use Stichoza\GoogleTranslate\GoogleTranslate;

class HomeController extends Controller
{
    public function showlang($locale ='en')
    {
        $lang = new GoogleTranslate('en');
        // return $lang->setSource('en')->setTarget('fr')->translate("welcome to computer world");

        $viewContent= View('web.dashboard.index')->render();

        $units=explode('.',$viewContent);
        $translatedContent='';
        foreach ($units as $unit) {

            $translateUnit= $lang->setSource('en')->setTarget('fr')->translate($unit);
            $translatedContent .= $translateUnit;

        }
        // $translatedContent= $lang->setSource('en')->setTarget('fr')->translate($viewContent);
        return $translatedContent;
        // session()->forget('selectedLang');
        // return view('web.dashboard.index');
    }

    public function showHome($locale ='en')
    {
        // session()->forget('locale');
        // session()->forget('selectedLang');
        return view('web.dashboard.index');
    }

    public function storeNewsletters(Request $request)
    {
        $email = $request->input('email');

        $newsletter = new Newsletter;
        $newsletter->email = $email;

        $newsletter->save();

        if($newsletter){
            return response()->json(["newsletter" => $newsletter]);
        }
        else{
            return response()->json(["Error: " => "Not submitted"]);
        }
    }

    public function langSwitch(Request $request) {

        // session()->forget('selectedLang');
        $selectedLang=$request->input('language');
        // dd($selectedLang);
        session()->put('selectedLang',$selectedLang);

        $locale=$request->language;
        // if(array_key_exists($locale, config('app.locales'))){

        //     session(['locale'=>$locale]);
        // }

        if(array_key_exists($locale, config('app.locales')))
        {
                session(['locale'=>$locale]);

                // if(session()->has('locale'))
                // {
                //     app()->setLocale(session('locale'));
                //     // dd($a);
                // }
        }
        // session()->forget('locale');
        return back();
    }
}
