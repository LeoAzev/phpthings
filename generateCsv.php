<?php

function gerarArquivosCsv($nomeArquivo, $users){
    
    if(count($users)> 0):
        $escreverCsv = fopen($nomeArquivo, "w");
        foreach($users as $dados){
            fputcsv($escreverCsv, $dados);
        }
        fclose($escreverCsv);
    else:
        echo "Não há dados";
    endif;
    
}

$users = [
    ["nome", "idade", "E-mail"],
    ["João", 34, "joao@gmail.com"],
    ["Maria", 23, "maria@gmail.com"],
    ["Pedro", 45, "pedro@hotmail.com"],
    ["Thiago",33,"thiago@gmail.com"]
];

$nomeArquivo = "user.csv";

gerarArquivosCsv($nomeArquivo,$users);

?>
