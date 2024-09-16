<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stichoza\GoogleTranslate\GoogleTranslate;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // $targetLanguage = $request->get('lang', 'eng');
        // // Translate the content
        // // $translator = new GoogleTranslate(env('GOOGLE_TRANSLATE_API_KEY'));
        // $translator= new GoogleTranslate('guj','en');

        // $translatedContent = $translator->translate($request->getContent(), $targetLanguage);

        // // Update the request content with translated content
        // $request->merge(['content' => $translatedContent]);

        // return $next($request);

        // session()->forget('locale');
        // session()->forget('selectedLang');

        if(session()->has('locale')){
            // session()->forget();
            app()->setLocale(session('locale'));
        }

        return $next($request);
    }
}
