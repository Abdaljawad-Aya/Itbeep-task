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
     */
}