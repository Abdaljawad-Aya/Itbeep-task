<?php

namespace App\Http\Controllers;

use App\Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\form;
use Illuminate\Support\Facades\Mail as FacadesMail;

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
        FacadesMail::send(
            'emails.formUser',
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