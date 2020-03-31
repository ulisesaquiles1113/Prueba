@extends('Finanzas.layout')

@section('contenido')
<center>
<h1>Ingresos</h1>
<br>
<h2>Ingrese el monto del movimiento</h2>
<form method="POST" action="{{ route('finanzas.store') }}">
    
    <p><label for="monto_movimiento">Monto: 
    <input type="number" min="1" name="monto" id="monto"></label></p>
    <p><label for="tipo_ingreso">Tipo de Movimiento: 
    <select name="tipo_ingreso" id="tipo_ingreso">
        <option value="Ingreso">Ingreso</option>
        <option value="Retiro">Retiro</option>
    </select></label></p>
    <input type="submit" value="Ingresar">
</form>
<hr>
</center>
@stop