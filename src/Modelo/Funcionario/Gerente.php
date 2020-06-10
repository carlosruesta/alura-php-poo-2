<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{

    public function calculaBonificao(): float
    {
        return $this->salario * 0.1;
    }

    public function podeAutenticar($senha)
    {
        return $senha === '1234';
    }
}