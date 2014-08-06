@extends('layout')
@section('content')

<div class="jumbotron">
  <div class="container">
    <h1>{{ $category->name }}</h1>
    <p>Proyecto de prueba en laravel de postulación de desarrolladores</p>
    <p><a href="https://github.com/juan55860/diti">https://github.com/juan55860/diti</a></p>
    <p><a class="btn btn-primary btn-lg" role="button">Acceder &raquo;</a></p>
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
      @foreach ($category->paginate_candidates as $candidate)
      <tr>
        <td>{{ $candidate->user->full_name }}</td>
        <td>{{ $candidate->job_type_title }}</td>
        <td>{{ $candidate->description }}</td>
        <td width="50">
          <a href="{{ route('candidate', [$candidate->slug, $candidate->id]) }}" class="btn btn-info">Ver</a>
        </td>
        @endforeach
      </tr>

    </tbody>

  </table>

  {{ $category->paginate_candidates->links() }}

  <p>
    <a href="">Ver Todos Backend-developer</a>
  </p>

</div>

@stop