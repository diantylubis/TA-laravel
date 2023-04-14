<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateTripController extends Controller
{
    public function index(){
        return view('pages.private-trip-detail');
    }
}
