<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActoresController extends Controller
{
    public function listado() {
      $actores = Actor::paginate(5);

      $filtrados = $actores->filter(function ($actor) {
        return $actor->rating > 7 && $actor->peliculas->count() >= 1;
	    })->values();

      $VAC = compact("actores", "filtrados");

      return view("listadoActores", $VAC);
    }

    public function show($id){
    	$actor = Actor::find($id);
    	$VAC = compact("actor");
    	return view("actors", $VAC);
    }
}
