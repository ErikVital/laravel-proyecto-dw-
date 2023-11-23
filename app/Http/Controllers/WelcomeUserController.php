<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($nombre, $apodo=null){
        $nombre = ucfirst($nombre);

        if($apodo){
            return "Bienvenido {$nombre}, tu apodo es {$apodo}";
        }else{
            return "Bienvenido {$nombre}";
            }
    }

    public function welcome(){
        return view('welcome');
    }

    public function miruta(){
        return "Hola Mundo";
    }
}
