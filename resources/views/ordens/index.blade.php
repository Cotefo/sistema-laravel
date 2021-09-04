





@extends('layouts.app')

@section('content')
<div class="container">



@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif


<a href="{{url('ordens/lista')}}" class="btn btn-success">Lista de Clientes</a>
<a href="{{url('ordens/lista')}}" class="btn btn-success">Lista de ordenes</a>
<a href="{{url('ordens/create')}}" class="btn btn-success">Crear Orden</a>
<br><br>


      
      <table class="table">
        <thead class="thead-light">
          <tr>
                <th>Id</th>
                <th>Cédula de Cliente</th>
                <th>Nombre</th>
    
                <th>Dirección</th>
                <th>Cantidad de Productos</th>
                <th>Cantidad de Productos</th>
                <th>Total a Cancelar</th>
                <th>Estado de la Orden</th>
          </tr>
        </thead>
        <tbody>
                @foreach ($ordens as $clientes)
            
      
                <tr>
                    <td>{{$clientes->id}}</td>
                   
                    <td>
                        
                                @if(($clientes->status=='Pagada'))
                                         
                            
                                <a  href="{{ url('/ordens/'.$clientes->id.'/ver')}}" class="btn btn-primary"> 
                                    
                                    Ver </a>   
                                    @else
        
                                   
                                        <a href="{{ url('/ordens/'.$clientes->id.'/edit')}}" class="btn btn-warning"> 
                            
                            Editar </a>   
                                    
                                @endif
                                <form action="{{url('/ordens/'.$clientes->id)}}" method="post" class="d-inline">
                                    @csrf
                                   
                                    {{@method_field('DELETE')}}
                                    <input type="submit" class="btn btn-danger" onclick="return confirm ('¿Quieres borrar el cliente?')" value="Borrar">
                                  
                                    </form> 
                                    
        <form action="{{url('/ordens/'.$clientes->id)}}">
        
  
        </tr>
            @endforeach
    </tbody>
        </tbody>
      </table>





</div>
@endsection