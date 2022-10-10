<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = User::find(Auth::id());

        $user->name = $request->name;

        // TODO: Se for admin, pode alterar o email do usuario
        // $user->email = $request->email;
        $user->phone = $request->phone;
        $user->whatsapp = $request->whatsapp;
        $user->address_city = $request->address_city;
        $user->address_state = $request->address_state;
        $user->address_postal = $request->address_postal;
        $user->address_street = $request->address_street;
        $user->address_number = $request->address_number;
        $user->address_complement = $request->address_complement;
        $user->address_reference = $request->address_reference;
        $user->id = Auth::id();     
        
        if($user->save()){
            return view('dashboard.profile.index', ['user' => $user, 'message' => 'Usuario alterado', 'alert' => 'alert-success']);
        }else{
            return view('dashboard.profile.index', ['user' => $user,'message' => 'Erro ao atualizar o usuário!', 'alert' => 'alert-error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $User)
    {
        //
    }

    
}
