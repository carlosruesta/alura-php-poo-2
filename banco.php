<?php

    require_once 'autoload.php';

    use Alura\Banco\Modelo\Conta\Conta;
    use Alura\Banco\Modelo\Conta\ContaCorrente;
    use Alura\Banco\Modelo\Conta\ContaPoupanca;
    use Alura\Banco\Modelo\Conta\Titular;
    use Alura\Banco\Modelo\CPF;
    use Alura\Banco\Modelo\Endereco;
    use Alura\Banco\Modelo\Funcionario;

    $endereco = new Endereco("Petrópolis", "bairro", "rua", "12");

    $vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
    $primeiraConta = new ContaCorrente($vinicius);
    $primeiraConta->deposita(500);
    $primeiraConta->saca(300); // isso é ok

    echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
    echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
    echo $primeiraConta->recuperaSaldo() . PHP_EOL;

    $patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
    $segundaConta = new ContaPoupanca($patricia);
    var_dump($segundaConta);

    $outra = new ContaCorrente(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endereco));
    unset($segundaConta);
    echo Conta::recuperaNumeroDeContas();

    $funcionario = new Funcionario("Funcionario", new CPF('123.654.789-01'), 'developer');
    var_dump($funcionario);
