<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManifestoController extends Controller
{
    public function manifesto_agricultural_productivity()
    {
        return view('frontend.manifesto.agricultural_productivity');
    }

      public function manifesto_industrialisation()
    {
        return view('frontend.manifesto.industrialisation');
    }

      public function manifesto_urbanisation()
    {
        return view('frontend.manifesto.urbanisation');
    }

      public function manifesto_decentralisation()
    {
        return view('frontend.manifesto.decentralisation');
    }

}
