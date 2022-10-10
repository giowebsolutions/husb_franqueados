<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContatoController extends Controller
{
    //Coleta Contato
    public function coletaContato(){
        // $user = new User();
        // $user->name = 'Gio';
        // $user->email = 'gio@gio.com';
        // $user->password = Hash::make('123');
        // $user->save(); 
        echo 'Contato Coletado';

        return view('contato.index');
    }
}
