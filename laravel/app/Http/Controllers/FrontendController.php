<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rezepte;
use App\User;

class FrontendController extends Controller
{
    public function index(Rezepte $rezeptes)
    {
        return view('frontend.index', compact('rezeptes'));
    }

    public function show(Rezepte $rezept)
    {
        return view('frontend.show' , compact('rezept'));
    }

    public function check(Request $request)
    {
        if(Auth::check() && Auth::user()->authorizeRoles(['admin'])){
            return redirect('backend');
        }else{
            return redirect('/');
        }
    }
}
