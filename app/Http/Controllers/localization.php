<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class localization extends Controller
{
    public function view($locale){
    	session()->put('locale',$locale);
    	return redirect()->back();
    }
}
