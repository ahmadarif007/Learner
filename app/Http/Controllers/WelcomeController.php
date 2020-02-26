<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function masterPage(){
    	return view('frontEnd.home.homeContent');
    }
}
