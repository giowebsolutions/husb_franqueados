@extends('layouts.admin-panel')

@section('title')Clientes @endsection


{{-- START SECTION --}}
@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

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
        <li><a class="group w-40 relative flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/dashboard/admin/clientes/create">Adicionar Cliente</a></li>
    </ul>
</div>



<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Whatsapp</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
@foreach ($clients as $client)
        <tr>
            <td>{{$client->name}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->phone}}</td>
            <td>{{$client->whatsapp}}</td>
            <td>{{$client->address_street}}</td>
            <td>{{$client->address_city}}</td>
            <td>{{$client->address_state}}</td>
            <td>
                <ul>
                    <li><a href="/dashboard/admin/clientes/{{$client->id}}/edit/" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a></li>
                </ul>
            </td>
        </tr>
@endforeach
    </tbody>
    </table>



{{-- END SECTION --}}
@endsection