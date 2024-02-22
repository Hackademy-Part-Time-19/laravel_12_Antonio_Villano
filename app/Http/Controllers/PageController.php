<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{

    public function homepage(){

         return view('welcome');

    }
}
