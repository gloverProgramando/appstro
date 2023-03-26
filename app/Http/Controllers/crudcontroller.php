<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class crudcontroller extends controller
{   //usuarios
    public function ver()
    {
        $urlserver = env('URL_SERVER_API') . "users/";
        $response = Http::get($urlserver);
        $datos = $response->json();
        return view('usuarios', compact('datos'));
    }

    public function añadir_usuario(Request $request)
    {
        $urlserver = env('URL_SERVER_API') . "users/signup";
        $data = [
            'typeUser'=> intval($request->input('rol')),
            'firstName'=> $request->input('nombre'),
            'lastName'=> $request->input('apellidos'),
            'email'=> $request->input('correo'),
            'contrasenia'=> $request->input('contraseña'),
            'user'=> $request->input('nombre_usuario') 
        ];
        $response = Http::post($urlserver, $data);
        return view('registrar-editar-usuario')->with('sucess',$response);
    }

    public function editar_usuario($id)
    {
        $urlserver = env('URL_SERVER_API') . "";
    }

    public function ver_tipos()
    {
        $urlserver = env('URL_SERVER_API') . "astros/types/";
        $response = Http::get($urlserver);
        $datos = $response->json();
        return view('astro_tipos', compact('datos'));
    }
    //planetas
    public function ver_planetas()
    {
        $urlserver = env('URL_SERVER_API') . "astros/all/";
        $response = Http::get($urlserver);
        $datos = $response->json();
        return view('astros', compact('datos'));
    }

    public function añadir_planeta(Request $request)
    {
        $urlserver = env('URL_SERVER_API') . "astros/postAstro";
        $data = [
            'name_astro' => $request->input('nombre_astro'),
            'description' => $request->input('descripcion'),
            'mainComposition' => intval($request->input('composicion')),
            'distance' => $request->input('distancia'),
            'imgURL' => $request->input('URL'),
            'typpeAstro' => intval($request->input('type_astro'))
        ];
        $response = Http::post($urlserver, $data);
        return view('astros')->with('sucess',$response);
    }
}
