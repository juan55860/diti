@extends('layout')
@section('content')

<div class="jumbotron">
  <div class="container">
    <h1>Welcome!</h1>
    <p>Proyecto de prueba en laravel de postulación de desarrolladores</p>
    <p><a href="https://github.com/juan55860/diti">https://github.com/juan55860/diti</a></p>
    <p><a href="{{ route('sign_up') }}" class="btn btn-primary btn-lg" role="button">Acceder &raquo;</a>
    </p>
  </div>
</div>

<div class="container">
  <!-- Example row of columns -->

  <h1> Últimos candidatos </h1>
  <h1> Backend Developers </h1>
  <table class="table table-striped">
    <thead>

      <tr>
        <th>Nombre</th>
        <th>Tipo de trabajo</th>
        <th>Descripción</th>
        <th>Ver</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Juan Camilo Varela</td>
        <td>Backend developer</td>
        <td>Learning Laravel</td>
        <td width="50">
          <a href="" class="btn btn-info">Ver</a>

        </td>

      </tr>

    </tbody>

  </table>

  <p>
    <a href="">Ver Todos Backen-developer</a>
  </p>

  <div class="row">
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
  </div>
</div>

@stop