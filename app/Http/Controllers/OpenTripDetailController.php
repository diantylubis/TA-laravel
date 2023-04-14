<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenTripDetailController extends Controller
{
    public function index(){
        return view('pages.open-trip-detail');
    }
}
