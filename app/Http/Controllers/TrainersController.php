<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainersController extends Controller
{
    //
    public function trainerspage() {

        return view('pages.trainers');
    }
}
