<?php

    require_once 'autoload.php';

    use Alura\Banco\Modelo\CPF;
    use Alura\Banco\Modelo\Funcionario\Diretor;
    use Alura\Banco\Modelo\Funcionario\Gerente;
    use Alura\Banco\Service\CalculadorDeBonificacoes;

    $diretor = new Diretor('Vinicius Dias', new CPF('123.456.789-10'), 'Desenvolvedor', 10000);

$gerente = new Gerente( 'Alexandre', new CPF('123.456.789-10'), 'Diretor', 3000);

    $calculadorDeBonificacoes = new CalculadorDeBonificacoes();
    $calculadorDeBonificacoes
        ->adicionaBonificacaoDe($gerente)
        ->adicionaBonificacaoDe($diretor);

    echo $calculadorDeBonificacoes->recuperaTotal();