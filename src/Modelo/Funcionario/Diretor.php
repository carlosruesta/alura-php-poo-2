<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{

    public function calculaBonificao(): float
    {
        return $this->salario * 0.1;
    }

    public function podeAutenticar(string $senha)
    {
        return $senha === '2222';
    }
}