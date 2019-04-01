<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Url;
use App\Http\Requests;
use App\Models\ContactUs;
use Mail;
use Validator;

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
            'message' => 'required|min:3|max:1000'
        ]);

        if($validator->fails())
        {
            return Redirect::to(URL::previous() . "#form-contact")->withErrors($validator)->withInput();
        }



        ContactUs::create($request->all());

        Mail::send('email',
        array(
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone' => $request->get('phone'),
        'user_message' => $request->get('message')
        ), function($message)
        {
            $message->from('noreply@tatoumi.com');
            $message->to('tony@tatoumi.com', 'Admin')
            ->subject('Contact sur le site Tatoumi Création');
        });

        return redirect()->route('home')->with('ok',  __('Merci de nous avoir contacté, vous recevrez une réponse dans moins de 24h.'));
    }
}
