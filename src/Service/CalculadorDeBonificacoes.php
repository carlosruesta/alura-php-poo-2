<?php


    namespace Alura\Banco\Service;

    use Alura\Banco\Modelo\Funcionario\Funcionario;

    class CalculadorDeBonificacoes
    {
        private float $total = 0;

        public function adicionaBonificacaoDe(Funcionario $funcionario) : self
        {
            $this->total += $funcionario->calculaBonificao();
            return $this;
        }

        public function recuperaTotal(): float
        {
            return $this->total;
        }
    }