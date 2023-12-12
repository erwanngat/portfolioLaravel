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

    public function contact(){
        return view('contact');
    }

    public function projet1(){
        return view('parcoursPro.projets.projet1');
    }

    public function projet2(){
        return view('parcoursPro.projets.projet2');
    }

    public function projet3(){
        return view('parcoursPro.projets.projet3');
    }
}
