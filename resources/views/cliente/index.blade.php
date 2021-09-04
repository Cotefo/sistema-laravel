





@extends('layouts.app')

@section('content')
<div class="container">



@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif


<a href="{{url('cliente/create')}}" class="btn btn-success">Crear Orden</a>
<br><br>


      
      <table class="table">
        <thead class="thead-light">
          <tr>
                <th>Id</th>
                <th>Cédula de Cliente</th>
                <th>Nombre</th>
    
                <th>Dirección</th>
                <th>Cantidad de Productos</th>
                <th>Monto a Pagar</th>
                <th>Estado</th>
                <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
                @foreach ($cliente as $clientes)
            
      
                <tr>
                    <td>{{$clientes->id}}</td>
                    <td>{{$clientes->ced_cliente}}</td>
                    <td>{{$clientes->nombre_cliente}}</td>
                    <td>{{$clientes->direccion_cliente}}</td>
                    <td>{{$clientes->cant_productos}}</td>
                    <td>{{$clientes->total}}$</td>
                    <td>{{$clientes->estado}}</td>
                    <td>
                        
                                @if(($clientes->estado=='Pagado'))
                                         
                            
                                <a  href="{{ route('imprimir')}}" class="btn btn-primary"> 
                                    
                                    Imprimir </a>   
                                    @else
        
                                   
                                        <a href="{{ url('/cliente/'.$clientes->id.'/edit')}}" class="btn btn-warning"> 
                            
                            Editar </a>   
                                    
                                @endif
                                <form action="{{url('/cliente/'.$clientes->id)}}" method="post" class="d-inline">
                                    @csrf
                                   
                                    {{@method_field('DELETE')}}
                                    <input type="submit" class="btn btn-danger" onclick="return confirm ('¿Quieres borrar el cliente?')" value="Borrar">
                                  
                                    </form> 
                                    
        <form action="{{url('/cliente/'.$clientes->id)}}">
        
  
        </tr>
            @endforeach
    </tbody>
        </tbody>
      </table>





</div>
@endsection