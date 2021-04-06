
@extends('layouts.app')

@section('content')

<div class="container">

session para editar datos

<form class="" action="{{url('/trabajos/'.$trabajo->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}

  @include('trabajos.form',['Modo'=>'editar'])


</form>
</div>
@endsection
