@extends('layouts.admin-panel')

@section('title') Clientes @endsection

{{-- START SECTION --}}
@section('content')
@isset($alert)
<div class="{{$alert}}" role="alert">
    <div class="flex">
      <div>
        <p class="font-bold">{{$message}}</p>
      </div>
    </div>
  </div>
@endisset
<div class="container my-4 p-0">
    <ul>
      <li><a class="btn-primary" href="/dashboard/admin/clientes/create/">Adicionar Cliente</a></li>
    </ul>
</div>


{{-- UPDATE CLIENTE --}}
<form action="/dashboard/admin/clientes/@isset($client){{$client->id}}@endisset" method="POST">
  @method('PUT')
  @csrf
  <div class="flex flex-column">
    @include('includes.client-form-fields')

    <input type="hidden" name="id" id="id" >
    <input type="submit" value="Alterar" class="btn-primary mt-4">
  </div>
</form>

{{-- DELETE CLIENTE --}}
<form action="/dashboard/admin/clientes/{{$client->id}}" method="POST">
  @method('DELETE')
  @csrf
  <input type="submit" value="Excluir" class="btn-primary mt-4">
</form>

{{-- END SECTION --}}
@endsection