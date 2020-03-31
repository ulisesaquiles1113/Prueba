<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador_Paginas extends Controller
{
    public function home() {
        return view('Finanzas.home');
    }
    public function ingreso() {
        return view('Finanzas.ingreso');
    }
    public function mensaje(Request $request) {
        $this->validate($request, [
            'monto' => 'required|min:1'
        ]);
        return $request->all();
    }
    public function retiro() {
        return view('Finanzas.home');
    }
    public function total() {
        return view('Finanzas.home');
    }
}

