
<div class="form-group">
  <label class="control-label" for="NombreTrabajo">{{'NombreTrabajo'}}</label>
  <input type="text" name="NombreTrabajo" class="form-control {{$errors->has('NombreTrabajo')?'is-invalid':''}} "
  value="{{isset($trabajo->NombreTrabajo)? $trabajo->NombreTrabajo:old('NombreTrabajo')}}">


{!! $errors->first('NombreTrabajo','  <div class="invalid-feedback">:message</div>') !!}


</div>



<div class="form-group">
  <label class="control-label" for="FechaFinal">{{'FechaFinal'}}</label>
  <input class="form-control {{$errors->has('FechaFinal')?'is-invalid':''}}" type="date" name="FechaFinal"
  value="{{isset($trabajo->FechaFinal)? $trabajo->FechaFinal:old('FechaFinal')}}">

  {!! $errors->first('FechaFinal','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

  <label class="control-label" for="Precio">{{'precio'}}</label>
  <input class="form-control {{$errors->has('Precio')?'is-invalid':''}}" type="text" name="Precio"
value="{{isset($trabajo->precio)? $trabajo->precio:old('Precio')}}">


{!! $errors->first('Precio','<div class="invalid-feedback">:message</div>') !!}

</div>




<div class="form-group">

  <label class="control-label" for="Foto">{{'Foto'}}</label>

  @if(isset($trabajo->Foto))
  </br>
  <img  style="cursor:pointer" class="img-thumbnail img-fluid" src=" {{  asset('storage').'/'.$trabajo->Foto}}" alt="" width="200px"/br>
  </br>
  @endif
  <input class="form-control {{$errors->has('Foto')?'is-invalid':''}}" type="file" name="Foto" value="">

  {!! $errors->first('Foto','<div class="invalid-feedback">:message</div>')!!}

</div>




<label class="control-laber" for="DetallesReparacion">{{'DetallesReparacion'}}</label>
</br>
<textarea class="form-control {{$errors->has('DetallesReparacion')?'is-invalid':''}}" name="DetallesReparacion" value="" rows="8" cols="80">{{isset($trabajo->DetallesReparacion)? $trabajo->DetallesReparacion:old('DetallesReparacion')}}</textarea>

{!! $errors->first('DetallesReparacion','<div class="invalid-feedback">:message</div>') !!}

</br>
<input  type="submit" class="btn btn-success" name="" value="{{$Modo == 'crear' ? 'Agregar ' : 'Modificar'}}">
<a class="btn btn-primary" href="{{url('trabajos')}}">Regresar</a>
