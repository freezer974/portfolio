<?php

namespace App\Http\Controllers;

use Mail;
use Validator;
use App\Http\Requests;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Url;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Redirect;

class ContactUsController extends Controller
{

    public function contactUs()
    {
        return redirect(route('home') . '#form-contact');
    }

    /**
     * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */

    public function contactUsPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/[0-9]{10}/',
            'message' => 'required|min:3|max:1000',
            'recaptcha' => 'required|recaptcha',
        ]);

        if($validator->fails())
        {
            Toastr::error(__('Corriger les erreurs dans le formulaire'), __('Contact'));
            return Redirect::to(URL::previous() . "#form-contact")->withErrors($validator)->withInput();
        }



        ContactUs::create($request->all());

        Mail::send('email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'user_message' => $request->get('message')
            ), function($message){
                $message->from('noreply@tatoumi.com');
                $message->to('tony@tatoumi.com', 'Admin')
                ->subject(__('Contact sur le site Tatoumi Création'));
        });
        Toastr::success(__('Merci de nous avoir contacté, vous recevrez une réponse dans moins de 24h.'), __('Contact'));
        return redirect()->route('home');
    }
}
