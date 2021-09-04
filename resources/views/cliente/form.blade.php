
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
<label for="">ID</label>
<input type="text" class="form-control" value="{{ isset($cliente->id)?$cliente->id:'' }}" name="id">

</div>


<div class="form-group">
<label for="">Cédula del Cliente</label>
<input type="text" class="form-control" value="{{isset($cliente->ced_cliente)?$cliente->ced_cliente:''}}" name="ced_cliente">

</div>

<div class="form-group">
<label for="">Nombre</label>
<input type="text" class="form-control" value="{{isset ($cliente->nombre_cliente)?$cliente->nombre_cliente:''}}" name="nombre_cliente">

</div>

<div class="form-group">
<label for="">Direccion</label>
<input type="text" class="form-control" value="{{isset ($cliente->direccion_cliente)?$cliente->direccion_cliente:''}}" name="direccion_cliente">

</div>

<div class="form-group">
<label for="">Cantidad de productos</label>
<input type="text" class="form-control" value="{{isset($cliente->cant_productos)?$cliente->cant_productos:''}}" name="cant_productos">

</div>

<div class="form-group">
        <label for="">Total a Cancelar</label>
        <input type="text" class="form-control" value="{{isset($cliente->total)?$cliente->total:''}}" name="total">
        
        </div>

        <div class="form-group">
                <label for="">Estatus</label>
                <input type="text" class="form-control" value="{{isset($cliente->estado)?$cliente->estado:''}}" name="estado">
                
                </div>

<input type="submit" class="btn btn-success" value="{{$modo}} datos">
<a href="{{url('cliente/')}}" class="btn btn-primary">Regresar</a>
<br>
