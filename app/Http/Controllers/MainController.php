<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MainController extends Controller
{
    public function main(Request $request){
    	$url = $request->url();
    	$VAC = compact("url", "user");
    	return view("masterPage", $VAC);
    }

    public function editarUsuario(){
    	$user = Auth::user();
    	$VAC = compact("user");
    	return view("editarUsuario", $VAC);
    }	

}