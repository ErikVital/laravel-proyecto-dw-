<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PrimerModelo;


class WelcomeMenuController extends Controller
{
    public function index(){
        return view('inicio');
    }

    public function shopping(){
        return view('shop');
    }

    public function nosotros(){
        return view('nosotros');
    }

    public function servicios(){
        return view('servicios');
    }

    public function lugares(){
        return view('lugares');
    }

    public function contacto(){
        return view('contacto');
    }

    public function cocina(){
        return view('foods');
    }
    
    public function dbtest(){

        $users = PrimerModelo::all();

        return view('dbtest', compact('users'));
    }

    public function formulario(){
        return view('formulario');
    }
}
