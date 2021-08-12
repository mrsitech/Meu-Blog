<?php
    function redireciona(string $url ): void
    {
        //redireciona rodando todo o html da pagina
        header("Location: $url");
        die();//Mata a releitura, mesmo se atualizar a pagina.
    }

?>
