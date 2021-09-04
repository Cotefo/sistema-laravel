
<h1>{{$modo}} Cliente</h1>
<!--
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul> 
        Todos los datos requeridos
    @foreach ($errors->all as $error)
    <li> {{$error}}</li>   
@endforeach
</ul>    

</div>


@endif
-->
<div class="form-group">
<label for="">Cedula</label>
<input type="text" class="form-control" value="{{ isset($cliente->id)?$cliente->id:'' }}" name="id">

</div>


<div class="form-group">
<label for="">Nombre</label>
<input type="text" class="form-control" value="{{isset($cliente->nombre)?$cliente->nombre:''}}" name="nombre">

</div>

<div class="form-group">
<label for="">Apellido</label>
<input type="text" class="form-control" value="{{isset ($cliente->apellido)?$cliente->apellido:''}}" name="apellido">

</div>

<div class="form-group">
<label for="">Correo</label>
<input type="text" class="form-control" value="{{isset ($cliente->correo)?$cliente->correo:''}}" name="correo">

</div>

<div class="form-group">
<label for="">Status</label>
<input type="text" class="form-control" value="{{isset($cliente->status)?$cliente->status:''}}" name="status">

</div>

<input type="submit" class="btn btn-success" value="{{$modo}} datos">
<a href="{{url('cliente/')}}" class="btn btn-primary">Regresar</a>
<br>
