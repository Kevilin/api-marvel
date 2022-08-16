<?php

namespace App\Models;

class Config
{
    static public function getAutenticacao()
    {
        $ts = uniqid();
        $publicKey = getenv('PUBLIC_KEY');
        $privateKey = getenv('PRIVATE_KEY');
        $hash = md5($ts . $privateKey . $publicKey);
        $autenticacao = '&ts=' . $ts . '&apikey=' . $publicKey . '&hash=' . $hash;

        if (!is_string($autenticacao)) {
            throw new \Exception('Autenticação precisa ser uma string!');
        }

        return $autenticacao;
    }

    static public function getListaHerois()
    {
        $heroisFavoritos = ['wolverine', 'hulk', 'captain america'];

        if (!$heroisFavoritos) {
            throw new \Exception('É necessário ter pelo menos um herói!');
        }

        return $heroisFavoritos;
    }
}