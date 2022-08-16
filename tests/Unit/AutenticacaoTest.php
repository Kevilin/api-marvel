<?php

namespace Tests\Unit;

use App\Models\Config;
use PHPUnit\Framework\TestCase;

class AutenticacaoTest extends TestCase
{
    /**
     * Teste que verifica se os dados de autenticação é uma string
     * @return void
     */
    public function testValidaDadosDeAutenticacaoApi()
    {
        $config = new Config;

        $this->assertIsString($config->getAutenticacao(), 'Autenticação precisa ser uma string!');
    }
}
