<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function admin(){
        return view('dashboard.admin');
    }


    public function profile(User $user){
        $user =  User::find(Auth::id());
        return view('dashboard.profile.index', [
            'user' => $user]);
    }

}
