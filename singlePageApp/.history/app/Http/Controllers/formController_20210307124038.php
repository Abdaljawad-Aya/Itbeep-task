<?php

namespace App\Http\Controllers;

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

        \Mail::send('emails.form')

        return back()->with('success', 'Thanks for contact us!');
    }
}