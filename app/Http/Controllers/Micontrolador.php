<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Micontrolador extends Controller
{



    public function bienvenido() {
        $url_base = url('/');
        return view('Bienvenido', compact('url_base'));
    }





    public function articulos() {
        return view('articulos');
    }




    public function contacto() {
        $url_base = url('/');
        return view('Contacto', compact('url_base'));
    }



    public function inicio() {
        $url_base = url('/');
        return view('Inicio', compact('url_base'));
    }



    public function sobrenosotros() {
        $url_base = url('/');
        return view('SobreNosotros', compact('url_base'));
    }



    public function politica() {
        $url_base = url('/');
        return view('Politica', compact('url_base'));
    }




}

