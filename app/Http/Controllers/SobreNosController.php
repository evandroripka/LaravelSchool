<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobrenos(){
        //echo 'Sobre nós controlador';
        return view('site.sobre-nos');
    }
}
