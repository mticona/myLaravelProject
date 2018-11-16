<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PeliculasController extends Controller
{


    public function buscarPeliculaId($id){
      $peliculas = [
                    1 => "Toy Story",
                    2 => "Buscando a Nemo",
                    3 => "Avatar",
                    4 => "Star Wars: Episodio V",
                    5 => "Up",
                    6 => "Mary and Max"
                    ];
      return $peliculas[$id]??'El ID buscado es inválido';
    }
    public function retornoArray(){
      $peliculas = [
                    1 => "Toy Story",
                    2 => "Buscando a Nemo",
                    3 => "Avatar",
                    4 => "Star Wars: Episodio V",
                    5 => "Up",
                    6 => "Mary and Max"
                    ];
      return view('peliculas/peliculas',['peliculas'=> $peliculas]);
    }
    public function buscarPeliculaNombre($nombre){
      $peliculas = [
                    1 => "Toy Story",
                    2 => "Buscando a Nemo",
                    3 => "Avatar",
                    4 => "Star Wars: Episodio V",
                    5 => "Up",
                    6 => "Mary and Max"
                    ];
      $return = 'No se encontraron peliculas coincidentes';
      foreach ($peliculas as $key => $value) {
        if($value === $nombre){
          $return = $value;
        }
      }

      return view('peliculas.mostrar')->with('peli', $return); //controlador manda datos a vista
      //return view('peliculas.mostrar', ['parametro' => $return] );
    }
}
