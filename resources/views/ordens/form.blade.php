
<h1>{{$modo}} Orden</h1>
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
<label for="">ID de Factura</label>
<input type="text" class="form-control" value="{{ isset($ordens->id)?$ordens->id:'' }}" name="id">

</div>


<div class="form-group">
<label for="">Cédula del Cliente</label>
<input type="text" class="form-control" value="{{isset($ordens->nombre)?$ordens->nombre:''}}" name="nombre">

</div>

<div class="form-group">
<label for="">Nombre del Cliente</label>
<input type="text" class="form-control" value="{{isset ($ordens->apellido)?$ordens->apellido:''}}" name="apellido">

</div>

<div class="form-group">
<label for="">Direccion del Cliente</label>
<input type="text" class="form-control" value="{{isset ($ordens->correo)?$ordens->correo:''}}" name="correo">

</div>

<div class="form-group">
        <label for="">Cantidad de Productos</label>
        <input type="text" class="form-control" value="{{isset ($ordens->correo)?$ordens->correo:''}}" name="correo">
        
        </div>

<div class="form-group">
<label for="">Status</label>
<input type="text" class="form-control" value="{{isset($ordens->status)?$ordens->status:''}}" name="status">

</div>

<input type="submit" class="btn btn-success" value="{{$modo}} datos">
<a href="{{url('ordens/')}}" class="btn btn-primary">Regresar</a>
<br>
