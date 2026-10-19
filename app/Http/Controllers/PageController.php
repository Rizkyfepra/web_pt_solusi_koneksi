<?php

namespace App\Http\Controllers;

use App\Models\Profil;

class PageController extends Controller
{
    public function profil()
    {
        $profil = Profil::singleton();

        return view('profil', compact('profil'));
    }
}
