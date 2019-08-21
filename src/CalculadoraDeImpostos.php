<?php

namespace Meu\Projeto;

class CalculadoraDeImpostos
{
    public function calcula(Produto $produto): float
    {
        if ($produto->recuperarPreco() > 500) {
            return $produto->recuperarPreco() * 0.1;
        }

        return 0;
    }
}
