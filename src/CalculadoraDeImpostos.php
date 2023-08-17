<?php

namespace Meu\Projeto;

class CalculadoraDeImpostos
{
    public function calcula(Produto $produto): float
    {
        if ($produto->preco > 500) {
            return $produto->preco * 0.1;
        }

        return 0;
    }
}
