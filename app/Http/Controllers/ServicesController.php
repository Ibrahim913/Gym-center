<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function servicespage() {

        return view('pages.services');
    }
}
