<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    //
    public function pricingpage() {

        return view('pages.pricing');
    }
}
