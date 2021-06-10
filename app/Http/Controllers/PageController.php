<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
use Symfony\Component\VarDumper\VarDumper;

class PageController extends Controller
{
    public function index(){

        $travels = Travel::all();

        return view('home', compact('travels'));
    }
}
