<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        // if($response->getStatusCode() == 200 && $response->headers->get('content-type')=='text/html; charset=UTF-8'){
        //     $content=$response->getContent();
        //     $translatedContent = $this->translateHTML($content);

        //     // Update the response content with translated content
        //     $response->setContent($translatedContent);
        // }
        // return $response;
        if ($this->isHtmlResponse($response)) {
            // Translate HTML content
            // Set translated content to response
        $translatedContent=$this->translateResponse($response->getContent());
        $response->setContent($translatedContent);
        }
        return $response;
    }
    private function isHTMLResponse($response)
    {
        return $response instanceof \Illuminate\Http\Response &&
        strpos($response->headers->get('Content-Type'), 'text\html') !== false;
    }

    private function translateResponse($content){
        $translator= new GoogleTranslate('en','fr');
        return $translator->translate($content);
    }
}
