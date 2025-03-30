<?php

function lerArquivoCsv($nomeArquivo){

    $users = [];

    if(file_exists($nomeArquivo)):
        $abrirArquivo = fopen($nomeArquivo, 'r');
        while(($linha = fgetcsv($abrirArquivo, 0, ',')) !== FALSE){
            $users[] = $linha;
        }
        fclose($abrirArquivo);
    else:
        echo "Arquivo não encontrado, verifique o caminho digitado... \n";
    endif;

    return $users;
}

$nomeArquivo = "user.csv";

$dadosLidos = lerArquivoCsv($nomeArquivo);

if(count($dadosLidos) > 0):
    echo "Dados encontrados... \n";
    foreach($dadosLidos as $dados)
    {
        echo implode(' , ',$dados) ." \n";
    }
else:
    echo "Não encontramos dados nenhum... \n";
endif;
