<?php

    function logar($usuario, $senha, $profissao){
        
        // Verifica no MySQL a existência do usuário e senha para realizar o login caso seja
        // A variável profissão deverá ser recebida ou como "Alunos" ou como "Professor"
            $pesquisa = "select * from ".$profissao;
            $resultadoPesquisa = mysqli_fetch_array($pesquisa);
        ////////////////////////////////////////////////////////////////////////////////////

        // Caso o usuário exista o login é realizado
        foreach()
    }


?>