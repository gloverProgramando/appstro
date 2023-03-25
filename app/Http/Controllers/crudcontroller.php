<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Http;


class crudcontroller extends controller
{
    public function ver (){
        $urlserver = env('URL_SERVER_API')."users/";
        $response = Http::get($urlserver);
        $datos = $response->json();
        return view('usuarios',compact('datos'));
    }
    public function ver_tipos(){
        $urlserver = env('URL_SERVER_API')."astros/types/";
        $response = Http::get($urlserver);
        $datos = $response->json();
        return view('astro_tipos',compact('datos')); 
    }

    public function ver_planetas(){
        $urlserver = env('URL_SERVER_API')."astros/all/";
        $response = Http::get($urlserver);
        $datos = $response->json();
        return view('astros',compact('datos')); 
    }
}