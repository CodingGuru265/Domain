<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManifestoController extends Controller
{
    public function manifesto_agricultural_productivity()
    {
        return view('frontend.manifesto.agricultural_productivity');
    }
}
