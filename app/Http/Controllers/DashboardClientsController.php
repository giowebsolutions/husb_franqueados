<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $message = null)
    {
        $clients = Clients::all()->where('user_id', Auth::id());
        $sorted = $clients->sortDesc();
        return view('dashboard.clients.index', ['clients' => $sorted]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('dashboard.clients.add', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Clients $client)
    { 
            $client->name = $request->name;
            $client->email = $request->email;
            $client->phone = $request->phone;
            $client->whatsapp = $request->whatsapp;
            $client->address_city = $request->address_city;
            $client->address_state = $request->address_state;
            $client->address_postal = $request->address_postal;
            $client->address_street = $request->address_street;
            $client->address_number = $request->address_number;
            $client->address_complement = $request->address_complement;
            $client->address_reference = $request->address_reference;
            $client->user_id = Auth::id();

            if($client->save()){
                return view('dashboard.clients.edit', ['client' => $client, 'message' => 'Cliente adicionado', 'alert' => 'alert-success']);
            }else{
                return view('dashboard.clients.edit', ['client' => $client,'message' => 'Erro ao atualizar o cliente!', 'alert' => 'alert-error']);
            }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(Clients $clients)
    {
        $clients = Clients::all()->latest()->get();
        return view('dashboard.clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $client = Clients::find($id);
        if($client->exists()){
            return view('dashboard.clients.edit', ['client' => $client, 'request' => $request, 'message' => '', 'alert' => '']);
        }else{
            return redirect('/dashboard');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cliente)
    {

        $client = Clients::find($cliente);

        if($client->exists()){

            $client->name = $request->name;
            $client->email = $request->email;
            $client->phone = $request->phone;
            $client->whatsapp = $request->whatsapp;
            $client->address_city = $request->address_city;
            $client->address_state = $request->address_state;
            $client->address_postal = $request->address_postal;
            $client->address_street = $request->address_street;
            $client->address_number = $request->address_number;
            $client->address_complement = $request->address_complement;
            $client->address_reference = $request->address_reference;

            if($client->save()){
                return view('dashboard.clients.edit', ['client' => $client, 'message' => 'Cliente Atualizado', 'alert' => 'alert-success']);
            }else{
                return view('dashboard.clients.edit', ['client' => $client,'message' => 'Erro ao atualizar o cliente!', 'alert' => 'alert-error']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $client = Clients::find($request->cliente);
        $client->delete();
        return redirect()->action([DashboardClientsController::class, 'index'])->with('message' , 'Usuário excluido com sucesso');
    }
}
