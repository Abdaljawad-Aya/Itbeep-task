<?php

namespace App\Http\Controllers;

use App\Http\Mail\formUser;
use Illuminate\Http\Request;
// use App\HTTP\Request;
use App\form;

class formController extends Controller
{
    /**
     * Show the application
     *
     * @return \Illuminatey\Http\Response
     */

    public function form()
    {
        return view('form-user');
    }

    /**
     * Show the application
     *
     * @return \Illuminatey\Http\Response
     */

    public function formSaveData(Request $request)

    {
        $this->validate($request, [
            'name'   => 'required',
            'email'  => 'required',
            'mobile' => 'required',
        ]);

        form::create($request->all());
        Mail::send(
            'emails.contactus',
            array(
                'name' => $request->get('name'),
                'mobile' => $request->get('mobile'),
                'email' => $request->get('email'),

            ),
            function ($message) use ($request) {
                $message->from('onlineuser@gmail.com');
                $message->to('abdaljawad.ayah94@gmail.com', 'Admin')->subject($request->get('subject'));
            }
        );
        return back()->with('success', 'Thanks for contact us!');
    }
}