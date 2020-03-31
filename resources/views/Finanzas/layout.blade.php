<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <title>Mantenedor de Finanzas</title></center>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  <link href="{{ URL::asset('css/simple-sidebar.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body>
<center>
    <div class="d-flex" id="wrapper">

    <div class="bg-light border-top" id="sidebar-wrapper"><br>
      <div class="sidebar-heading">Mantenedor de Finanzas </div><br>
        <div class="list-group list-group-flush">
            <a href="{{ route('home')            }}">Bienvenido</a><br>
            <a href="{{ route('finanzas.create') }}">Ingresar Movimiento</a><br>
            <a href="{{ route('finanzas.index')  }}">Estadisticas</a><br>
        </div>
    </div>

    <div id="page-content-wrapper">
      <div class="container-fluid"><br>
        @yield('contenido')
      </div>
    </div>
    </div>
</center>
</body>
</html>
