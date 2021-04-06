@extends('layouts.app')

@section('content')

<div class="container">
<form class="" action="{{url('/empleados/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  {{method_field('PATCH')}} <!-- con este metodo accedemos directamente al update ara editar datos-->
  @include('empleados.form',['Modo'=>'editar'])


</form>
</div>

@endsection
