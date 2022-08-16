<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Heroi;
use App\Models\Config;

class HeroisController extends BaseController
{
    function listarHerois()
    {

        $heroisFavoritos = Config::getListaHerois();
        $autenticacao = Config::getAutenticacao();

        foreach ($heroisFavoritos as $heroi) {

            $listaDeHerois[] = new Heroi($heroi, $autenticacao);
        }

        return view('index')->with('listaDeHerois', $listaDeHerois);
    }
}
