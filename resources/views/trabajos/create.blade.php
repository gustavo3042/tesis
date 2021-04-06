
@extends('layouts.app')

@section('content')

<div class="container">

@if (count($errors)>0)


<div class="alert alert-danger" role="alert">


<ul>

  @foreach ($errors->all() as $error)

<li>{{$error}}</li>

  @endforeach

</ul>

</div>

@endif

  Sección para crear trabajos
<form class="form-horizontal" action="{{url('/trabajos')}}" method="post" enctype="multipart/form-data">

  {{csrf_field()}}

  @include('trabajos.form',['Modo'=>'crear'])


</form>
</div>

@endsection
