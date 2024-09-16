<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\RtoOffice;
use Illuminate\Http\Request;
// use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Models\Newsletter;

class SettingController extends Controller
{
    public function showSetting()
    {

        $rto=RtoOffice::all();
        return view('web.setting.setting',compact('rto'));
    }

    public function handleForm(Request $request){

        if($a=$request->has('action')){
            dd($a);
            if($request->input('action')==='submit'){
                $name     = $request->input('name');
                $email    = $request->input('email');
                $mobileNo = $request->input('mobile_no');
                $city     = $request->input('city');
                $message  = $request->input('message');
                $contact = new Contact;
                $contact->name = $name;
                $contact->email = $email;
                $contact->mobile_no = $mobileNo;
                $contact->city = $city;
                $contact->message = $message;
                $contact->save();

                if ($contact) {
                    return response()->json(["contact"=>$contact]);
                }
                else {
                    return response()->json(["Error: "=>"Not submitted"]);
                }
            }

            elseif($request->input('action')==='send'){

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
        }
    }

    public function storeContact(Request $request){
        $name     = $request->input('name');
        $email    = $request->input('email');
        $mobileNo = $request->input('mobile_no');
        $city     = $request->input('city');
        $message  = $request->input('message');

        $contact = new Contact;
        $contact->name = $name;
        $contact->email = $email;
        $contact->mobile_no = $mobileNo;
        $contact->city = $city;
        $contact->message = $message;

        $contact->save();

        if ($contact) {
            return response()->json(["contact"=>$contact]);
        }
        else {
            return response()->json(["Error: "=>"Not submitted"]);
        }
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


    public function formUrls($url){

        // $form1url= "https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_1.PDF";
        // return Redirect::to($form1url);

        //decode the external link which is in url parameter
        $decodeUrl=urldecode($url);
        return Redirect::away($decodeUrl);
        // return view('web.setting.redirect')->with('url',$decodeUrl);
    }
}
