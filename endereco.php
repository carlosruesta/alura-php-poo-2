<?php

    use Alura\Banco\Modelo\Endereco;

    require_once 'autoload.php';

    $endereco = new Endereco("cidade", "Bairro", "Rua", "123");

    $endereco->cidade = 'Ciudad';

    echo $endereco;