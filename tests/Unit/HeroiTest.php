<?php

namespace Tests\Unit;

use App\Models\Config;
use PHPUnit\Framework\TestCase;

class HeroiTest extends TestCase
{
    /**
     * Teste que verifica se a lista de heróis é válida
     * @return void
     */
    public function testValidaListaDeHerois()
    {
        $config = new Config;

        $this->assertIsArray($config->getListaHerois(), 'Lista de heróis precisa ser um array!');
        $this->assertCount(3, $config->getListaHerois(), 'O ideal é que a lista tenha 3 heróis!');
    }
}
