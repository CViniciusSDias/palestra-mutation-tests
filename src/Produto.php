<?php

namespace Meu\Projeto;

class Produto
{
    private $preco;

    public function __construct(float $preco)
    {
        $this->preco = $preco;
    }

    public function recuperarPreco(): float
    {
        return $this->preco;
    }
}
