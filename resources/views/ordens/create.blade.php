@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/ordens')}}" method="post" enctype="multipart/form-data">
    @csrf
    
    @include('ordens.form',['modo'=>'Crear'])   
</form>
</div>
@endsection