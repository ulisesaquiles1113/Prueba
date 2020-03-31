<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Finanza;

class Finanzas_Controller extends Controller
{

    public function index()
    {   
        
        $finanzas = Finanza::orderBy('created_at', 'desc')->take(5)->get();
        $mes_actual =
        $estadistica_mensual = DB::select("
        SELECT ((SELECT SUM(monto) FROM finanzas WHERE tipo_ingreso = 'Ingreso'))-((SELECT SUM(monto) FROM finanzas WHERE tipo_ingreso = 'Retiro')) AS total,
        (SELECT SUM(monto) FROM finanzas WHERE tipo_ingreso = 'Ingreso') AS ingresos, (SELECT SUM(monto) FROM finanzas WHERE tipo_ingreso = 'Retiro') AS retiros
        FROM finanzas 
        WHERE substr(created_at, 6, 2) = MONTH(CURDATE()) ", [1]);

        return view('Finanzas.estadisticas', compact('finanzas', 'estadistica_mensual'));
    }


    public function create()
    {
        return view('Finanzas.ingreso');
    }


    public function store(Request $request)
    {
        
        Finanza::create($request->all());
        return redirect()->route('finanzas.index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
