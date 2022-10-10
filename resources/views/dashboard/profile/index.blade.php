{{-- LAYOUT --}}
@extends('layouts.admin-panel')

{{-- SECTIONS --}}
@section('title')Perfil @endsection
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

<x-register-form-user url="{{route('update.user.profile')}}" :user="$user"/>

@endsection