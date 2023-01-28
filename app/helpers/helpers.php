<?php 

function formatException(Throwable $throw){
   // echo "entrou aqui";
    var_dump("Erro no arquivo {$throw->getFile()} na linha {$throw->getLine()} com a mensagem {$throw->getMessage()}");
}

?>