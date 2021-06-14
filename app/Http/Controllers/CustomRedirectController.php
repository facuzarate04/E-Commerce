<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomRedirectController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role_id;

        switch ($role) {
            case '2':
                return redirect('dashboard-vendedor');
                break;
            case '3':
                return redirect('dashboard-repartidor');
                break;    
            case '4':
                return redirect('dashboard');
                break;

            default:
                return redirect('dashboard-admin');
                break;
        }

    }

}
