@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('/cliente/'.$cliente->id)}}" method="POST">
    @csrf
    {{@method_field('PATCH')}}

    @if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
    @endif
        @include('cliente.form',['modo'=>'Editar']);   


</form>
</div>
@endsection