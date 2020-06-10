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
$primeiraConta = new ContaPoupanca($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(100); // isso é ok

echo $primeiraConta->recuperaSaldo() . PHP_EOL;


    $carlos = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
    $contaPop = new ContaCorrente($carlos);
    $primeiraConta->deposita(500);

    $primeiraConta->saca(100); // isso é ok

    echo $primeiraConta->recuperaSaldo() . PHP_EOL;
