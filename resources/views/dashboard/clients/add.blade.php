@extends('layouts.admin-panel')

@section('title')Clientes @endsection
{{-- START SECTION --}}
@section('content')


<div class="container my-4 p-0">
    <ul>
        <li><a class="btn-primary" href="/dashboard/admin/clientes/create">Adicionar Cliente</a></li>
    </ul>
</div>

<form action="{{route('clientes.store')}}" method="POST">
    @csrf
    <div class="flex flex-column">
        @include('includes.client-form-fields')
        <input type="hidden" name="id" id="id" >
        <input type="submit" value="Inserir" class="btn-primary mt-4">
    </div>
    
</form>


{{-- END SECTION --}}
@endsection