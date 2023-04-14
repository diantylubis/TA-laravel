<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderSuccessController extends Controller
{
    public function index(){
        return view('pages.order-success');
    }
}
