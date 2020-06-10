<?php

    spl_autoload_register(function (string $nomeCompletoDaClasse){
        $nomeArquivo = str_replace( "Alura\Banco", 'src', $nomeCompletoDaClasse);
        $nomeArquivo = str_replace( DIRECTORY_SEPARATOR, '\\', $nomeArquivo) . ".php";
        if(file_exists($nomeArquivo)) {
            require_once $nomeArquivo;
        }
    });