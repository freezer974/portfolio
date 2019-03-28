<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\ContactUs;
use Mail;

class ContactUsController extends Controller
{

    public function contactUs()
    {
        return view('contactUs');
    }

    /**
     * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */

    public function contactUsPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/[0-9]{10}/',
            'message' => 'required'
        ]);
        ContactUs::create($request->all());
        Mail::send('email',
        array(
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone' => $request->get('phone'),
        'user_message' => $request->get('message')
        ), function($message)
        {
            $message->from('contact@tatoumi.com');
            $message->to('noreply@tatoumi.com', 'Admin')
            ->subject('Contact sur le site Tatoumi Création');
        });
        return redirect()->route('home')->with('ok',  __('Merci de nous avoir contacté, vous recevrez une réponse dans moins de 24h.'));
    }
}
