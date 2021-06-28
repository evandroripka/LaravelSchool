<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
       // echo 'pagina ninja de contato meu bom';
       return view('site.contato');
    }
}
