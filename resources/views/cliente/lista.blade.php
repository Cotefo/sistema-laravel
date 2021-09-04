





@extends('layouts.app')

@section('content')
<div class="container">



@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif


<a href="{{url('cliente/lista')}}" class="btn btn-success">Lista de Clientes</a>
<a href="{{url('cliente/lista')}}" class="btn btn-success">Lista de ordenes</a>
<a href="{{url('cliente/create')}}" class="btn btn-success">Lista de Productos</a>
<br><br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Apellido</th>

            <th>Correo</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($cliente as $clientes)
            
      
        <tr>
            <td>{{$clientes->id}}</td>
            <td>{{$clientes->nombre}}</td>
            <td>{{$clientes->apellido}}</td>
            <td>{{$clientes->correo}}</td>
            <td>{{$clientes->status}}</td>
            <td>
                   <a href="{{ url('/cliente/'.$clientes->id.'/edit')}}" class="btn btn-warning"> 
                    
                    Editar </a>   
                
                
                <form action="{{url('/cliente/'.$clientes->id)}}" method="post" class="d-inline">
                @csrf
               
                {{@method_field('DELETE')}}
                <input type="submit" class="btn btn-danger" onclick="return confirm ('¿Quieres borrar el cliente?')" value="Borrar">
              
                </form> 
                
                </td>


        <form action="{{url('/cliente/'.$clientes->id)}}">
        
  
        </tr>
            @endforeach
    </tbody>
    
</table>
</div>
@endsection