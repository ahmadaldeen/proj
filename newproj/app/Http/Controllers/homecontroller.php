<?php

namespace App\Http\Controllers\Admin\Section;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class homecontroller extends Controller
{
    public function index(){

         return view('home');

     }
}
