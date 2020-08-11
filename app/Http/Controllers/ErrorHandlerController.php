<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\MessageBag;

class ErrorHandlerController extends Controller
{

    public function errorCode404()
    {

//        TODO:Test action
        abort(404, "Nothing here!");
        return view('errors.404');
    }

    public function errorCode405()
    {
//        TODO:Test action
        abort(404, "Nothing here!");

        return view('errors.405');
    }
}
