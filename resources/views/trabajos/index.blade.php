
@extends('layouts.app')

@section('content')

<div class="container">


  @if(Session::has('Mensaje')){{
Session::get('Mensaje')


  }}
  @endif

  <a class="btn btn-success" href="{{url('trabajos/create')}}">Agregar Reparación</a>
  <a class="btn btn-success" href="{{url('bar-chart')}}">Grafico Barras</a>
  <a href="{{url('empleados')}}">Regresar</a>

<table class="table table-light table-hover">
<thead class="thead-light">
  <tr>
    <th>#</th>
<th>Foto</th>
<th>NombreTrabajo</th>
<th>Fecha</th>
<th>Precio</th>
<th>Reparacion</th>
<th>DetallesReparacion</th>
<th>Acciones</th>

  </tr>
</thead>
<tbody>
  @foreach($trabajos as $trabajo)
  <tr>
    <td>{{$loop->iteration}}</td>
      <td>
<img src=" {{  asset('storage').'/'.$trabajo->Foto}}" class="img-thumbnail img-fluid" alt="" width="200px">


      </td>
      <td>{{$trabajo->NombreTrabajo}}</td>
        <td>{{$trabajo->FechaFinal}}</td>
          <td>{{$trabajo->precio}}</td>
            <td>{{$trabajo->NombreTrabajo}}</td>
              <td>{{$trabajo->DetallesReparacion}}</td>
              <td>

                <a  class="btn btn-warning" href="{{ url('/trabajos/'.$trabajo->id.'/edit') }}">

                  Editar</a>



<form action="{{url('/trabajos/'.$trabajo->id)}}" method="post" style="display:inline">
  {{csrf_field()}}
{{method_field('DELETE')}}
<button type="submit" onclick="return confirm('¿Borrar?');" class="btn btn-danger"  name="button">Borrar</button>
</form>

                </td>

  </tr>
  @endforeach
</tbody>
</table>

</div>
@endsection
