<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home(){
        return view('home');
    }

    public function cv(){
        return view('cv');
    }

    public function bts(){
        return view('bts');
    }

    public function parcourspro(){
        return view('parcoursPro.parcourspro');
    }

    public function projets(){
        return view('parcourspro.projets');
    }

    public function competences(){
        return view('parcourspro.competences');
    }

    public function veille(){
        return view('veille');
    }

    public function patrimoine(){
        return view('patrimoine');
    }
}
