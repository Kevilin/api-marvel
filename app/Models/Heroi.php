<?php

namespace App\Models;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class Heroi
{
    public $dadosHeroi;
    public $id;
    public $nome;
    public $imagem;
    public $descricao;
    public $historias;

    public function __construct($heroi, $autenticacao)
    {
        $this->dadosHeroi = $this->getDadosHeroi($heroi, $autenticacao);
        $this->id = $this->getIdHeroi($this->dadosHeroi);
        $this->nome = $this->getNomeHeroi($this->dadosHeroi);
        $this->imagem = $this->getImagemHeroi($this->dadosHeroi);
        $this->descricao = $this->getDescricaoHeroi($this->dadosHeroi);
        $this->historias = $this->getHistoriasHeroi($this->dadosHeroi);
    }

    function getDadosHeroi($heroi, $autenticacao)
    {

        try {
            $urlApi = 'https://gateway.marvel.com/v1/public/characters?name=' . $heroi . $autenticacao;
            $client = new Client();
            $request = new Request('GET', $urlApi);
            $resposta = $client->sendAsync($request)->wait();

            $dadosHeroi = json_decode($resposta->getBody()->getContents(), true);
        } catch (\Exception $e) {
            throw new Exception("Não foi possivel buscar os dados na API. Verificar se o nome do herói está correto ou se autenticação é válida.");
        }

        return $dadosHeroi['data']['results'][0];
    }
    function getNomeHeroi($dadosHeroi)
    {
        $nome = $dadosHeroi['name'];
        return $nome;
    }
    function getImagemHeroi($dadosHeroi)
    {
        $thumbnail = $dadosHeroi['thumbnail']['path'] . ".jpg";
        return $thumbnail;
    }
    function getDescricaoHeroi($dadosHeroi)
    {
        $descricaoHeroi = $dadosHeroi['description'];
        return $descricaoHeroi;
    }
    function getIdHeroi($dadosHeroi)
    {
        $id = $dadosHeroi['id'];

        return $id;
    }
    function getHistoriasHeroi($dadosHeroi)
    {
        $totalhistorias = $dadosHeroi['stories']['items'];

        shuffle($totalhistorias);

        $historias = [];
        foreach ($totalhistorias as $historia) {
            if (count($historias) < 5) {
                $historias[] = $historia['name'];
            }
        }

        return $historias;
    }
}
