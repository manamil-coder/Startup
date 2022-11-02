<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupperAdmin extends Controller
{
    public function homePage(){
        return view('layout.supper-admin.home');
    }
}
