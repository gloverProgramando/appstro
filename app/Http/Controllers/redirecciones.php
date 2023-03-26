<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Http;


class redirecciones extends controller
{
    public function redirection_creación_usuario(){
        return view('registrar-editar-usuario');
    }

    public function redirection_creación_astro(){
        return view('crear-editar-planeta');
    }
}