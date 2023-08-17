<?php

namespace Meu\Projeto\Tests;

use Meu\Projeto\{CalculadoraDeImpostos, Produto};
use PHPUnit\Framework\TestCase;

class CalculadoraDeImpostosTest extends TestCase
{
    private CalculadoraDeImpostos $calculadora;

    protected function setUp(): void
    {
        $this->calculadora = new CalculadoraDeImpostos();
    }

    public function testCalculaImpostoDeProdutoTributavel()
    {
        $smartphone = new Produto(1500);
        $imposto = $this->calculadora->calcula($smartphone);
        self::assertEquals(150, $imposto);
    }

    public function testCalculaImpostoDeProdutoIsento()
    {
        $hd = new Produto(300);
        $imposto = $this->calculadora->calcula($hd);
        self::assertEquals(0, $imposto);
    }
}
