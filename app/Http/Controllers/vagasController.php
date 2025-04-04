<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vagasController extends Controller
{
    public function vagas(){

        return  view('site.vagas');
    }
}
