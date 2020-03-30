<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{



   /* public function messageprincipal()
    {


        return view('pages.message-from-principal');
        //
    }*/

    public function messageprincipal()
    {


        return view('pages.comon');

    }


    //admission-info page

    public function admissioninfo()
    {




        return view('pages.admission-info');

    }
}
