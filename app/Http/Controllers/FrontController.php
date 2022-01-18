<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $voitures = Voiture::all();
        return view('home', compact('voitures'));
    }
}
