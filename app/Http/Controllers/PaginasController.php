<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaginasController extends Controller
{
    public function acerca(){
    	$nombre='mauricio';
    	$apellido='carrero';
    	return view ('acerca',compact('nombre','apellido'));
    }

    public function contacto(){
    	return view ('contacto');
    }
}
