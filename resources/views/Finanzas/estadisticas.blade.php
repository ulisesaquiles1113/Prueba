@extends('Finanzas.layout')

@section('contenido')
<center>
    <h1>Últimos movimientos</h1>
    <table width="50%" border="1">
        <thead>
            <tr>
                <th>Monto</th>
                <th>Tipo de Movimiento</th>
                <th>Fecha de movimiento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($finanzas as $movimiento)
                <tr>
                    <td >${{ $movimiento->monto }}</td>
                    <td >{{ $movimiento->tipo_ingreso }}</td>
                    <td >{{ $movimiento->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <h1>Estadistica Mensual</h1>
    <div class="col-md-3">
        <canvas id="myChart"></canvas>
    </div>
    <div>
        <p>Balance Total: ${{ $estadistica_mensual[0]->total }}</p>
        <p>Ingresos Totales: ${{ $estadistica_mensual[0]->ingresos }}</p>
        <p>Retiros Totales: ${{ $estadistica_mensual[0]->retiros }}</p>
    </div>
</center>

    <script>
        var ctxP = document.getElementById("myChart").getContext('2d');
        var myPieChart = new Chart(ctxP, {
        type: 'pie',
        data: {
        labels: ["Retiros", "Ingresos"],
        datasets: [{ data: ['{{$estadistica_mensual[0]->retiros}}', '{{$estadistica_mensual[0]->ingresos}}'], backgroundColor: ["#F7464A", "#46BFBD"],}]
        },
        }
        );
    </script>
@stop