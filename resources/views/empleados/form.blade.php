<div class="form-group" >
  <label for="Nombre" class="control-label">{{'Nombre'}}</label>
  <input type="text" class="form-control {{$errors->has('Nombre') ? 'is-invalid' : ''}} " name="Nombre" id="Nombre" value="{{isset($empleado->Nombre) ? $empleado->Nombre: old('Nombre')}}" placeholder="">

{!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
  <label for="ApellidoPaterno" class="control-label">{{'ApellidoPaterno'}}</label>
  <input type="text" class="form-control {{$errors->has('ApellidoPaterno') ? 'is-invalid' : ''}}" name="ApellidoPaterno" id="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno: old('ApellidoPaterno')}}" placeholder="">
  {!! $errors->first('ApellidoPaterno','<div class="invalid-feedback">:message</div>') !!}
</div>


<div class="form-group">
  <label for="ApellidoMaterno" class="control-label">{{'ApellidoMaterno'}}</label>
  <input type="text" name="ApellidoMaterno" class="form-control {{$errors->has('ApellidoMaterno') ? 'is-invalid' : ''}}" id="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno: old('ApellidoMaterno')}}" placeholder="">
  {!! $errors->first('ApellidoMaterno','<div class="invalid-feedback">:message</div>') !!}
</div>




<div class="form-group">
  <label for="Correo" class="control-label">{{'Correo'}}</label>
  <input type="text" class="form-control {{$errors->has('Correo') ? 'is-invalid' : ''}}" name="Correo" id="Correo" value="{{isset($empleado->Correo) ? $empleado->Correo: old('Correo')}}" placeholder="">
  {!! $errors->first('Correo','<div class="invalid-feedback">:message</div>') !!}
</div>



<div class="form-group">


<label for="Foto" class="control-label">{{'Foto'}}</label>
@if(isset($empleado->Foto))
</br>
<img class="img-thumbnail img-fluid" src="  {{ asset('storage').'/'.$empleado->Foto }}" alt="" width="200">
</br>
@endif

<input class="form-control {{$errors->has('Foto') ? 'is-invalid' : ''}}" type="file" name="Foto" id="Foto" value="" placeholder="">
  {!! $errors->first('Foto','<div class="invalid-feedback">:message</div>') !!}
</br>
</div>
<input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar' : 'Modificar'}}">
<a class="btn btn-primary" href="{{url('empleados')}}">Regresar</a>
